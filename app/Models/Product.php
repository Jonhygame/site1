<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;


class Product extends Model
{
    protected $table = 'products';
    use HasFactory;

    public function category(){
        return $this ->belongsTo(category::class);

    }
}
