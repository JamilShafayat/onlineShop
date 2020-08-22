<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];

    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }

    public function distributor()
    {
        return $this->hasOne(User::class, 'id','distributor_id');
    }

    public function products()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
