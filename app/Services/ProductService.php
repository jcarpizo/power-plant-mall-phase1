<?php

namespace PowerPlantMall\Services;

use Illuminate\Http\Request;
use PowerPlantMall\Model\Product;

class ProductService  implements ProductServiceInterface
{
    public function create(Request $request)
    {
        return Product::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $product =  $this->getById($id);
        return $product->update($request->all());
    }

    public function getList()
    {
        return Product::all();
    }

    public function getById($id)
    {
        return Product::find($id);
    }

    public function delete($id)
    {
       return Product::destroy($id);
    }
}