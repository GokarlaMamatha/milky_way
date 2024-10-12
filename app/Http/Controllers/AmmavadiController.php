<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAmmavadiRequest;
use App\Http\Requests\UpdateAmmavadiRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\AmmavadiRepository;
use Illuminate\Http\Request;
use Flash;

class AmmavadiController extends AppBaseController
{
    /** @var AmmavadiRepository $ammavadiRepository*/
    private $ammavadiRepository;

    public function __construct(AmmavadiRepository $ammavadiRepo)
    {
        $this->ammavadiRepository = $ammavadiRepo;
    }

    /**
     * Display a listing of the Ammavadi.
     */
    public function index(Request $request)
    {
        return view('ammavadis.index');
    }

    /**
     * Show the form for creating a new Ammavadi.
     */
    public function create()
    {
        return view('ammavadis.create');
    }

    /**
     * Store a newly created Ammavadi in storage.
     */
    public function store(CreateAmmavadiRequest $request)
    {
        $input = $request->all();

        $ammavadi = $this->ammavadiRepository->create($input);

        Flash::success('Ammavadi saved successfully.');

        return redirect(route('ammavadis.index'));
    }

    /**
     * Display the specified Ammavadi.
     */
    public function show($id)
    {
        $ammavadi = $this->ammavadiRepository->find($id);

        if (empty($ammavadi)) {
            Flash::error('Ammavadi not found');

            return redirect(route('ammavadis.index'));
        }

        return view('ammavadis.show')->with('ammavadi', $ammavadi);
    }

    /**
     * Show the form for editing the specified Ammavadi.
     */
    public function edit($id)
    {
        $ammavadi = $this->ammavadiRepository->find($id);

        if (empty($ammavadi)) {
            Flash::error('Ammavadi not found');

            return redirect(route('ammavadis.index'));
        }

        return view('ammavadis.edit')->with('ammavadi', $ammavadi);
    }

    /**
     * Update the specified Ammavadi in storage.
     */
    public function update($id, UpdateAmmavadiRequest $request)
    {
        $ammavadi = $this->ammavadiRepository->find($id);

        if (empty($ammavadi)) {
            Flash::error('Ammavadi not found');

            return redirect(route('ammavadis.index'));
        }

        $ammavadi = $this->ammavadiRepository->update($request->all(), $id);

        Flash::success('Ammavadi updated successfully.');

        return redirect(route('ammavadis.index'));
    }

    /**
     * Remove the specified Ammavadi from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ammavadi = $this->ammavadiRepository->find($id);

        if (empty($ammavadi)) {
            Flash::error('Ammavadi not found');

            return redirect(route('ammavadis.index'));
        }

        $this->ammavadiRepository->delete($id);

        Flash::success('Ammavadi deleted successfully.');

        return redirect(route('ammavadis.index'));
    }
}
