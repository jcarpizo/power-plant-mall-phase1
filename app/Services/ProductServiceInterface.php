<?php

namespace PowerPlantMall\Services;

use Illuminate\Http\Request;
use PowerPlantMall\Model\Product;

interface ProductServiceInterface
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
     * @return Product[]
     */
    public function getList();

    /**
     * @param $id
     * @return Product
     */
    public function getById($id);

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id);
}