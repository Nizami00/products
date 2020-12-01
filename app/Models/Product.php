<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'size', 'price', 'description'];

    public function deliveries()
    {
        return $this->hasMany(Delivery::class, 'size', 'size');
    }
}
