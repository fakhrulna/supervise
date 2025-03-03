<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'order';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    protected $fillable = [
        'customer_name',
        'customer_phone',
        'customer_address',
        'quantity',
        'status',
        'payment_status',
        'payment_method',
        'price',
        'notes',
        'menu_id',
    ];

    protected $casts = [
        'created_at' => 'datetime'
    ];
}
