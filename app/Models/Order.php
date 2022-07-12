<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'total_price',
        'manager_delivered_at',
        'submanager_delivered_at',
    ];

    public function products(){
        return $this->belongsToMany(Order::class,'order_product');
    }
}
