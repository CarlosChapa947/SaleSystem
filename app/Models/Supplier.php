<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    public $timestamps = false;
    use HasFactory;

    protected $primaryKey = 'supplier_id';

    protected $fillable = [
        'rut', 'name', 'address', 'phone', 'website'
    ];

    public function products() {
        return $this->hasMany(Product::class, 'supplier_id');
    }
}
