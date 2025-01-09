<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateProductsAPIRequest;
use App\Http\Requests\API\UpdateProductsAPIRequest;
use App\Models\Products;
use App\Repositories\ProductsRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;

/**
 * Class ProductsAPIController
 */
class ProductsAPIController extends AppBaseController
{
    private ProductsRepository $productsRepository;

    public function __construct(ProductsRepository $productsRepo)
    {
        $this->productsRepository = $productsRepo;
    }

    /**
     * Display a listing of the Products.
     * GET|HEAD /products
     */
    public function index(Request $request): JsonResponse
    {
        $products = $this->productsRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($products->toArray(), 'Products retrieved successfully');
    }

    /**
     * Store a newly created Products in storage.
     * POST /products
     */
    public function store(CreateProductsAPIRequest $request): JsonResponse
    {
        $input = $request->all();

        $products = $this->productsRepository->create($input);

        return $this->sendResponse($products->toArray(), 'Products saved successfully');
    }

    /**
     * Display the specified Products.
     * GET|HEAD /products/{id}
     */
    public function show($id): JsonResponse
    {
        /** @var Products $products */
        $products = $this->productsRepository->find($id);

        if (empty($products)) {
            return $this->sendError('Products not found');
        }

        return $this->sendResponse($products->toArray(), 'Products retrieved successfully');
    }

    /**
     * Update the specified Products in storage.
     * PUT/PATCH /products/{id}
     */
    public function update($id, UpdateProductsAPIRequest $request): JsonResponse
    {
        $input = $request->all();

        /** @var Products $products */
        $products = $this->productsRepository->find($id);

        if (empty($products)) {
            return $this->sendError('Products not found');
        }

        $products = $this->productsRepository->update($input, $id);

        return $this->sendResponse($products->toArray(), 'Products updated successfully');
    }

    /**
     * Remove the specified Products from storage.
     * DELETE /products/{id}
     *
     * @throws \Exception
     */
    public function destroy($id): JsonResponse
    {
        /** @var Products $products */
        $products = $this->productsRepository->find($id);

        if (empty($products)) {
            return $this->sendError('Products not found');
        }

        $products->delete();

        return $this->sendSuccess('Products deleted successfully');
    }
}
