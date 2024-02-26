<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class driver extends Model
{
    use HasFactory;
    protected $table = 'tb_driver';
    protected $fillable = [
        'driver_name',
        'status_driver',

    ];
    public $timestamps = false;
}
