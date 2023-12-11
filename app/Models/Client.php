<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Client extends Model
{
    #public $timestamps = false;
    use SoftDeletes;
    use HasFactory;

    protected $primaryKey = 'client_id';

    protected $fillable = [
        'rut', 'name'
    ];

    public function addresses() {
        return $this->hasMany(Address::class, 'client_id');
    }

    public function phones() {
        return $this->hasMany(ClientPhone::class, 'client_id');
    }

    public function sales() {
        return $this->hasMany(Sale::class, 'client_id');
    }
}
