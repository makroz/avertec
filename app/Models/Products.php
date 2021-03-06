<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'name', 'price', 'descrip'];

    public function orders()
    {
        return $this->hasMany('App\Models\Orders','products_id');
    }
}
