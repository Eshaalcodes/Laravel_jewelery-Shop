<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [

        'name',

        'address',

        'email',

        'work_phone',

        'cell_no',

        'date_of_birth',

        'category',

        'remarks',

        'total',

        'status',

    ];


    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
