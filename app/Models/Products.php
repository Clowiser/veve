<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
   protected $table = "products";

    protected $primaryKey = 'id';
    public $incrementing = true;

    protected $fillable = [
        'price' => 'required',
        'description' => 'required',
        'image' => 'required',
        'title' => 'required',
    ];
}
