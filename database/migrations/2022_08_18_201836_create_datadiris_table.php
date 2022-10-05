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
        Schema::create('datadiris', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('tmp_lahir');
            $table->string('tgl_lahir');
            $table->string('jns_kelamin');
            $table->string('gol_darah');
            $table->string('alamat');
            $table->string('agama');
            $table->string('hobby');
            $table->string('telepon');
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
        Schema::dropIfExists('datadiris');
    }
};
