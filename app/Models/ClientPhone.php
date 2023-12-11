<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class ClientPhone extends Model
{
    #public $timestamps = false;
    use SoftDeletes;
    use HasFactory;

    protected $primaryKey = 'phone_id';

    protected $fillable = [
        'client_id', 'phone'
    ];

    public function client() {
        return $this->belongsTo(Client::class, 'client_id');
    }
}
