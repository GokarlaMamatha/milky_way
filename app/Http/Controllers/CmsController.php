<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCmsRequest;
use App\Http\Requests\UpdateCmsRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\CmsRepository;
use Illuminate\Http\Request;
use Flash;

class CmsController extends AppBaseController
{
    /** @var CmsRepository $cmsRepository*/
    private $cmsRepository;

    public function __construct(CmsRepository $cmsRepo)
    {
        $this->cmsRepository = $cmsRepo;
    }

    /**
     * Display a listing of the Cms.
     */
    public function index(Request $request)
    {
        return view('cms.index');
    }

    /**
     * Show the form for creating a new Cms.
     */
    public function create()
    {
        return view('cms.create');
    }

    /**
     * Store a newly created Cms in storage.
     */
    public function store(CreateCmsRequest $request)
    {
        $input = $request->all();

        $cms = $this->cmsRepository->create($input);

        Flash::success('Cms saved successfully.');

        return redirect(route('cms.index'));
    }

    /**
     * Display the specified Cms.
     */
    public function show($id)
    {
        $cms = $this->cmsRepository->find($id);

        if (empty($cms)) {
            Flash::error('Cms not found');

            return redirect(route('cms.index'));
        }

        return view('cms.show')->with('cms', $cms);
    }

    /**
     * Show the form for editing the specified Cms.
     */
    public function edit($id)
    {
        $cms = $this->cmsRepository->find($id);

        if (empty($cms)) {
            Flash::error('Cms not found');

            return redirect(route('cms.index'));
        }

        return view('cms.edit')->with('cms', $cms);
    }

    /**
     * Update the specified Cms in storage.
     */
    public function update($id, UpdateCmsRequest $request)
    {
        $cms = $this->cmsRepository->find($id);

        if (empty($cms)) {
            Flash::error('Cms not found');

            return redirect(route('cms.index'));
        }

        $cms = $this->cmsRepository->update($request->all(), $id);

        Flash::success('Cms updated successfully.');

        return redirect(route('cms.index'));
    }

    /**
     * Remove the specified Cms from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cms = $this->cmsRepository->find($id);

        if (empty($cms)) {
            Flash::error('Cms not found');

            return redirect(route('cms.index'));
        }

        $this->cmsRepository->delete($id);

        Flash::success('Cms deleted successfully.');

        return redirect(route('cms.index'));
    }
}
