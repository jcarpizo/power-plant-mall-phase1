<?php

namespace PowerPlantMall\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Passport\HasApiTokens;

class Merchant extends Model
{
    use SoftDeletes, HasApiTokens;

    protected $fillable = ['name', 'logo', 'address'];

    protected $dates = ['deleted_at'];

    public function products()
    {
        return $this->hasMany('PowerPlantMall\Model\Product');
    }
}