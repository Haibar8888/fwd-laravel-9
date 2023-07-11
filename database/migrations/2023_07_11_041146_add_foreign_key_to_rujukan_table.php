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
        Schema::table('rujukan', function (Blueprint $table) {
            //
             $table->foreignId('doctor_id', 'fk_rujukan_to_doctor')->references('id')->on('doctor')->onUpdate('CASCADE')->onDelete('CASCADE');
             $table->foreignId('pasien_id', 'fk_rujukan_to_pasien')->references('id')->on('pasien')->onUpdate('CASCADE')->onDelete('CASCADE');
             $table->foreignId('prioritas_id', 'fk_rujukan_to_prioritas')->references('id')->on('prioritas')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rujukan', function (Blueprint $table) {
            //
            $table->dropForeign('fk_rujukan_to_doctor');
            $table->dropForeign('fk_rujukan_to_pasien');
            $table->dropForeign('fk_rujukan_to_prioritas');
        });
    }
};
