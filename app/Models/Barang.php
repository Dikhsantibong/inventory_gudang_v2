<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';
    protected $primaryKey = 'STOCK_CODE';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'STOCK_CODE',
        'CATEGORY',
        'DESCRIPTION',
        'DETAIL',
        'EXTRA'
    ];
} 