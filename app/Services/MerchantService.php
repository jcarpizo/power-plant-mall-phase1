<?php

namespace PowerPlantMall\Services;

use Illuminate\Http\Request;
use PowerPlantMall\Model\Merchant;

class MerchantService implements MerchantServiceInterface
{
    public function create(Request $request)
    {
        return Merchant::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $merchant = $this->getById($id);
        return $merchant->update($request->all());
    }

    public function getList()
    {
        return Merchant::all();
    }

    public function getById($id)
    {
        return Merchant::find($id);
    }

    public function products($id)
    {
        return Merchant::find($id)->products()->get();
    }

    public function delete($id)
    {
        return Merchant::destroy($id);
    }
}