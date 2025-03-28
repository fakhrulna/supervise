<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Inventory extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'inventory';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'quantity',
        'price',
        'unit',
        'expiry_date',
        'buy_date',
        'store_name'
    ];

    protected $casts = [
        'expiry_date' => 'datetime',
        'buy_date' => 'datetime'
    ];
}
