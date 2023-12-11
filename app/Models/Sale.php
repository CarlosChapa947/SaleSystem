<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Sale extends Model
{
    #public $timestamps = false;
    use SoftDeletes;
    use HasFactory;

    protected $primaryKey = 'sale_id';

    protected $fillable = [
        'date', 'client_id', 'discount', 'final_amount'
    ];

    public function client() {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function saleDetails() {
        return $this->hasMany(SaleDetail::class, 'sale_id');
    }
}
