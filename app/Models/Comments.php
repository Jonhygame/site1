<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table = 'comments';
    use HasFactory;

    public function products(){
        return $this ->hasMany(product::class,'product_id','id');

    }
}
