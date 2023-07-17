<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Radcheck extends Model
{
    use HasFactory;

    protected $table = 'radcheck';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $guarded = [
        'id'
    ];
}
