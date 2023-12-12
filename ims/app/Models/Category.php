<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function products(){
       return $this->hasMany(Product::class);
    }
    protected $fillable = [
        'name',
        'batch_prefix',
        // Add any other fields you want to allow for mass assignment
    ];
}
