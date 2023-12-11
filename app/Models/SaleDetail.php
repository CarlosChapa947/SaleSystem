<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class SaleDetail extends Model
{
    #public $timestamps = false;
    use SoftDeletes;
    use HasFactory;

    protected $primaryKey = 'sale_detail_id';

    protected $fillable = [
        'sale_id', 'product_id', 'sale_price', 'quantity', 'total_amount'
    ];

    public function sale() {
        return $this->belongsTo(Sale::class, 'sale_id');
    }

    public function product() {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
