<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    // use HasFactory;
    use SoftDeletes;

    // declare table name
    public $table = 'transaction';

    // this field must type date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare fillable fields
    protected $fillable = [
        'appointment_id',
        'transaction_code',
        'fee_doctor',
        'fee_specialist',
        'fee_hospital',
        'sub_total',
        'vat',
        'total',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // one to many
    public function appointment()
    {
        return $this->belongsTo('App\Models\Operational\Appointment', 'appointment_id', 'id');
    }
}
