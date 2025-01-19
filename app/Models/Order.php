<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['client_id', 'amount', 'status', 'date'];
    public function client() {
        return $this->belongsTo(Client::class);
    }
    public function products() {
        return $this->belongsToMany(Product::class)->withPivot('quantity');
    }
}
