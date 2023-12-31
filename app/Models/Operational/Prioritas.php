<?php

namespace App\Models\Operational;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prioritas extends Model
{
    // use HasFactory;
    use SoftDeletes;

    // declare table name
    public $table = 'prioritas';

    // this field must type date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare fillable fields
    protected $fillable = [
        'title',
    ];

}
