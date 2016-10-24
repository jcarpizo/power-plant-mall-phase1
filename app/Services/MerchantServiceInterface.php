<?php

namespace PowerPlantMall\Services;

use Illuminate\Http\Request;
use PowerPlantMall\Model\Merchant;
use PowerPlantMall\Model\Product;

interface MerchantServiceInterface
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function create(Request $request);

    /**
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function update(Request $request, $id);

    /**
     * @return Merchant[]
     */
    public function getList();

    /**
     * @param $id
     * @return Merchant
     */
    public function getById($id);

    /**
     * @param $id
     * @return mixed
     */
    public function products($id);

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id);
}