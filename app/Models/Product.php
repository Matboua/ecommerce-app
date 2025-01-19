<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'price', 'stock', 'description', 'categorie_id', 'image'];
    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }
    public function orders() {
        return $this->belongsToMany(Order::class)->withPivot('quantity');
    }
}
