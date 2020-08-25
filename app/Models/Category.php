<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($category){

            $category->slug = Str::slug($category->name);
        });
    }

    public function parent_category()
    {
        return $this->belongsTo(Category::class, 'id', 'category_id');
    }

    public function child_categories()
    {
        return $this->hasMany(__CLASS__);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
