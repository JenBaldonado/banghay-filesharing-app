<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banghay extends Model
{
    use HasFactory;

    protected $table = 'banghays';

    protected $fillable = [
        'file',
        'name'
    ];
}
