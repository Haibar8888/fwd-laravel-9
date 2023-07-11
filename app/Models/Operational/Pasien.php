<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pasien extends Model
{
    // use HasFactory;
    use SoftDeletes;

    // declare table name
    public $table = 'pasien';

    // this field must type date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare fillable fields
    protected $fillable = [
        'doctor_id',
        'nama',
        'usia',
        'jenis_kelamin',
        'asal_rs',
        'updated_at',
        'deleted_at',
    ];

}
