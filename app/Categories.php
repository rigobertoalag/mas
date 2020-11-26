<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = ['product_categories', 'products'];
    protected $fillable = ['cat_name', 'rest_id', 'cat_status'];
}
