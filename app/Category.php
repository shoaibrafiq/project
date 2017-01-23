<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

protected $fillable=['name'];
// as laravel is protected from anyone to edit a field it needs to be passed through

public function products()
{
return $this->hasMany(Product::class);

}//defined the relationship with products
// One category has many products

}
