<?php

namespace PowerPlantMall\Http\Controllers\Api;

use PowerPlantMall\Http\Controllers\Controller;
use PowerPlantMall\Services\ProductServiceInterface;
use Illuminate\Http\Request;
use Validator;

class ProductController extends Controller
{
    private $productService;

    public function __construct(ProductServiceInterface $productService)
    {
        $this->middleware('auth');
        $this->productService = $productService;
    }

    public function create(Request $request)
    {
        $validator = $this->validator($request->all());
        if ($validator->fails()) {
            return response(['message' => $validator->errors()], 422)
                ->header('Content-Type', 'application/vnd.api+json');

        }
        $product = $this->productService->create($request);
        return response(['products' => $product], 200)
            ->header('Content-Type', 'application/vnd.api+json');
    }

    public function update(Request $request, $id)
    {
        $product = $this->productService->update($request, $id);
        return response(['products' => $product], 200)
            ->header('Content-Type', 'application/vnd.api+json');
    }

    public function getList()
    {
        $product = $this->productService->getList();
        return response(['products' => $product], 200)
            ->header('Content-Type', 'application/vnd.api+json');
    }

    public function getById($id)
    {
        $product = $this->productService->getById($id);
        return response(['products' => $product], 200)
            ->header('Content-Type', 'application/vnd.api+json');
    }

    public function destroy($id) {
        $product = $this->productService->delete($id);
        return response(['products' => $product], 200)
            ->header('Content-Type', 'application/vnd.api+json');
    }

    private function validator($data)
    {
        return Validator::make($data, [
            'name' => 'required|min:6|max:255',
            'description' => 'required|min:6|max:255',
            'brand' => 'required',
            'sku' => 'required',
            'price' => 'required|numeric',
            'merchant_id' => 'required',
        ]);
    }
}