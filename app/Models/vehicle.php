<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehicle extends Model
{
    use HasFactory;
    protected $table = 'vehicle';
    protected $fillable = [
        'vehicle_id',
        'type',
        'status_order',
        'fuel',
        'category'
    ];
    public $timestamps = false;
}
