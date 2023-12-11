<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    #public $timestamps = false;
    use SoftDeletes;
    use HasFactory;

    protected $primaryKey = 'address_id';

    protected $fillable = [
        'client_id', 'street', 'number', 'colony', 'city'
    ];

    public function client() {
        return $this->belongsTo(Client::class, 'client_id');
    }
}
