<?php

namespace PowerPlantMall\Http\Controllers\Api;

use PowerPlantMall\Http\Controllers\Controller;
use PowerPlantMall\Services\MerchantServiceInterface;
use Illuminate\Http\Request;
use Validator;

class MerchantController extends Controller
{
    private $merchantService;

    public function __construct(MerchantServiceInterface $merchantService)
    {
        $this->middleware('auth');
        $this->merchantService = $merchantService;
    }

    public function create(Request $request)
    {
        $validator = $this->validator($request->all());
        if ($validator->fails()) {
            return response(['message' => $validator->errors()], 422)
                ->header('Content-Type', 'application/vnd.api+json');

        }
        $merchant = $this->merchantService->create($request);
        return response(['merchants' => $merchant], 200)
            ->header('Content-Type', 'application/vnd.api+json');
    }

    public function update(Request $request, $id)
    {
        $validator = $this->validator($request->all());
        if ($validator->fails()) {
            return response(['message' => $validator->errors()], 422)
                ->header('Content-Type', 'application/vnd.api+json');

        }
        $merchant = $this->merchantService->update($request, $id);
        return response(['merchants' => $merchant], 200)
            ->header('Content-Type', 'application/vnd.api+json');
    }

    public function getList()
    {
        $merchant = $this->merchantService->getList();
        return response(['merchants' => $merchant], 200)
            ->header('Content-Type', 'application/vnd.api+json');
    }

    public function getById($id)
    {
        $merchant = $this->merchantService->getById($id);
        return response(['merchants' => $merchant], 200)
            ->header('Content-Type', 'application/vnd.api+json');
    }

    public function getProductsByMerchantId($id)
    {
        $merchant = $this->merchantService->products($id);
        return response(['products' => $merchant], 200)
            ->header('Content-Type', 'application/vnd.api+json');
    }

    public function destroy($id) {
        $merchant = $this->merchantService->delete($id);
        return response(['merchants' => $merchant], 200)
            ->header('Content-Type', 'application/vnd.api+json');
    }

    private function validator($data)
    {
        return Validator::make($data, [
            'name' => 'required|min:3|max:255',
        ]);
    }
}