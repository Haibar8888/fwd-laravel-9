<?php

namespace App\Models\Operational;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rujukan extends Model
{
     // use HasFactory;
    use SoftDeletes;

    // declare table name
    public $table = 'rujukan';

    // this field must type date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare fillable fields
    protected $fillable = [
        'docter_id',
        'prioritas_id',
        'timing_masuk',
        'timing_respon',
        'timing_kelengkapan_berkas',
        'timing_status',
        'diagnosa',
        'alasan_dirujuk',
        'pews/news',
        'kebutuhan_dirujuk',
        'file',
        'status',
        'operator',
        'keterangan',
        'advisi_konsulan_dpjp',
        'advisi_doktor_konsulan',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

}
