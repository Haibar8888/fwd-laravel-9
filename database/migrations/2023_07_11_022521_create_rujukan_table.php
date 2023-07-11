<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rujukan', function (Blueprint $table) {
            $table->id();
            $table->date('timing_masuk');
            $table->date('timing_respon');
            $table->date('timing_status');
            $table->date('timing_kelengkapan_berkas');
            $table->string('diagnosa');
            $table->string('alasan_dirujuk');
            $table->string('file');
            $table->string('status');
            $table->string('operator');
            $table->string('keterangan');
            $table->string('advisi_konsulan_dpjp');
            $table->string('advisi_doktor_konsulan');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rujukan');
    }
};
