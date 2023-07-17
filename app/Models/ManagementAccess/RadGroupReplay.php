<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RadGroupReplay extends Model
{
    use HasFactory;

    protected $table = 'radgroupreplay';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $guarded = [
        'id'
    ];
}
