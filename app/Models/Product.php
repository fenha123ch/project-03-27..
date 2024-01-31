<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $primaryKey = 'poduct_id';

    public function category(){
        return $this->belongsTo(category::class,'category_id');


    }
}
