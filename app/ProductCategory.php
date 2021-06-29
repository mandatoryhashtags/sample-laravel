<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class ProductCategory extends Model
{
    public function products()
    {
        return $this->hasMany(Product::class)
            ->orderBy('name', 'DESC');
    }
}
