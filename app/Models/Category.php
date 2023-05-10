<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $guarded = ['id'];

    public function fkProduct()
    {
        return $this->hasMany(Product::class,'category_id','id');
    }

    // public function fkPoduct()
    // {
    //     return $this->hasMany(Product::class,'category_id','id');
    // }
}
