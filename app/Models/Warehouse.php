<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;

    const WAREHOUSE_MAIN = 0;
    const WAREHOUSE_SUB = 1;

    protected $fillable =[
        'name',
        'type'
    ];
}
