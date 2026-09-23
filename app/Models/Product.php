<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['category_id', 'code', 'name', 'unit', 'price', 'stock'];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function transactionsDetails(){
        return $this->hasMany(TransactionDetail::class);
    }
    public function getFormattedPriceAttribute(){
        return 'Rp. ' . number_format($this->price, 0, ',', '.');
    } 
}
