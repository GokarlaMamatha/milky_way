<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateAmmavadiAPIRequest;
use App\Http\Requests\API\UpdateAmmavadiAPIRequest;
use App\Models\Ammavadi;
use App\Repositories\AmmavadiRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;

/**
 * Class AmmavadiAPIController
 */
class AmmavadiAPIController extends AppBaseController
{
    private AmmavadiRepository $ammavadiRepository;

    public function __construct(AmmavadiRepository $ammavadiRepo)
    {
        $this->ammavadiRepository = $ammavadiRepo;
    }

    /**
     * Display a listing of the Ammavadis.
     * GET|HEAD /ammavadis
     */
    public function index(Request $request): JsonResponse
    {
        $ammavadis = $this->ammavadiRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($ammavadis->toArray(), 'Ammavadis retrieved successfully');
    }

    /**
     * Store a newly created Ammavadi in storage.
     * POST /ammavadis
     */
    public function store(CreateAmmavadiAPIRequest $request): JsonResponse
    {
        $input = $request->all();

        $ammavadi = $this->ammavadiRepository->create($input);

        return $this->sendResponse($ammavadi->toArray(), 'Ammavadi saved successfully');
    }

    /**
     * Display the specified Ammavadi.
     * GET|HEAD /ammavadis/{id}
     */
    public function show($id): JsonResponse
    {
        /** @var Ammavadi $ammavadi */
        $ammavadi = $this->ammavadiRepository->find($id);

        if (empty($ammavadi)) {
            return $this->sendError('Ammavadi not found');
        }

        return $this->sendResponse($ammavadi->toArray(), 'Ammavadi retrieved successfully');
    }

    /**
     * Update the specified Ammavadi in storage.
     * PUT/PATCH /ammavadis/{id}
     */
    public function update($id, UpdateAmmavadiAPIRequest $request): JsonResponse
    {
        $input = $request->all();

        /** @var Ammavadi $ammavadi */
        $ammavadi = $this->ammavadiRepository->find($id);

        if (empty($ammavadi)) {
            return $this->sendError('Ammavadi not found');
        }

        $ammavadi = $this->ammavadiRepository->update($input, $id);

        return $this->sendResponse($ammavadi->toArray(), 'Ammavadi updated successfully');
    }

    /**
     * Remove the specified Ammavadi from storage.
     * DELETE /ammavadis/{id}
     *
     * @throws \Exception
     */
    public function destroy($id): JsonResponse
    {
        /** @var Ammavadi $ammavadi */
        $ammavadi = $this->ammavadiRepository->find($id);

        if (empty($ammavadi)) {
            return $this->sendError('Ammavadi not found');
        }

        $ammavadi->delete();

        return $this->sendSuccess('Ammavadi deleted successfully');
    }
}
