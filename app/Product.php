<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

protected $fillable=['name','description','price','size','category_id','image'];

public function category()
{
  $this->belongsTo(Category::class);
}//defining relationship with category
// one product belongs to one catgeory

}
