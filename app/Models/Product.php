<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Product extends Model
{
    #public $timestamps = false;
    use SoftDeletes;
    use HasFactory;

    protected $primaryKey = 'product_id';

    protected $fillable = [
        'name', 'current_price', 'stock', 'supplier_id', 'category_id'
    ];

    public function supplier() {
        return $this->belongsTo(Supplier::class, 'supplier_id');
    }

    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function saleDetails() {
        return $this->hasMany(SaleDetail::class, 'product_id');
    }
}
