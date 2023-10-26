<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laboratory extends Model
{
    use HasFactory;
    protected $fillable = [
        'item_type',
        'item_cond',
        'description',
        'defects',
        'quantity',
        'file'
    ];
}
