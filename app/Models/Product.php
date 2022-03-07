<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// class au singulier !!

class Product extends Model
{
   protected $table = "products";

   //ici, on fait la relation entre Product Category
   public function category()
   {
      return $this->belongsTo(Category::class);
   }

}
