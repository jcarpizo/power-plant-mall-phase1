<?php

namespace PowerPlantMall\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Passport\HasApiTokens;

class Product extends Model
{
    use SoftDeletes, HasApiTokens;

    protected $fillable = ['name', 'image', 'description', 'brand', 'sku', 'price', 'others', 'merchant_id'];

    protected $dates = ['deleted_at'];
}