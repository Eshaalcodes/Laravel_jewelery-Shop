<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [

        'category_id',

        'subcategory_id',

        'name',

        'description',

        'price',

        'quantity',

        'image',

        'status',

    ];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function subcategory()
{
    return $this->belongsTo(Subcategory::class, 'subcategory_id');
}


    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
