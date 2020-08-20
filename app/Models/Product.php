<?php

namespace App\Models;

use Plank\Mediable\Mediable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use Mediable;
    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product){

            $product->slug = Str::slug($product->title);
        });
    }

    public function category()
    {
        return $this->hasOne(Category::class);
    }

    public function supplier()
    {
        return $this->hasOne(User::class, 'supplier_id');
    }
}
