<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ordering extends Model
{
    use HasFactory;
    protected $table = 'ordering';
    protected $fillable = [
        'id_vehicle',
        'order_date',
        'aprroval_status',
        'id_approval1',
        'id_approval2',
        'id_driver',
        'status_approval1',
        'status_approval2'
    ];
    public $timestamps = false;
}
