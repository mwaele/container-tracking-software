<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Container extends Model
{
    use HasFactory;

    protected $fillable = [
        'vessel_name',
        'schedule',
        'call_sign',
        'voyage_in_out',
        'eta',
        'loa',
        'draft',
        'agent',
        'disch',
        'load',
        'remarks',
    ];

    protected $table = 'containers';
}
