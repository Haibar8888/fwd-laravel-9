<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RadUserGroup extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'radusergroup';

    protected $dates = [
        'created_at',
        'updated_at',
      
    ];

    protected $guarded = [
        'id'
    ];
    
}
