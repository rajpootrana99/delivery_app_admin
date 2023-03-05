<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryPoint extends Model
{
    use HasFactory;

    protected $fillable = ['order_id', 'delivery_point'];

    protected $casts = [
        'order_id' => 'integer',
    ];

    public function getDeliveryPointAttribute($value)
    {
        $val = isset($value) ? json_decode($value, true) : null;
        return $val;
    }

    public function setDeliveryPointAttribute($value)
    {
        $this->attributes['delivery_point'] = isset($value) ? json_encode($value) : null;
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
