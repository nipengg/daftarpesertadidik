<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_lengkap');
            $table->string('nama_panggilan');
            $table->string('jk');
            $table->string('ttl');
            $table->string('agama');
            $table->string('citacita');
            $table->string('hobby');
            $table->integer('anak_ke');
            $table->integer('jumlah_saudara');
            $table->integer('berat_badan');
            $table->integer('tinggi_badan');
            $table->string('golongan_darah');
            $table->string('alamat_rumah');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kota');
            $table->string('propinsi');
            $table->string('telp_rumah');
            $table->string('email');
            $table->string('tinggal');
            $table->string('tbc');
            $table->string('malaria');
            $table->string('chotipa');
            $table->string('cacar');
            $table->string('penyakit_lain');
            $table->string('kelainan_jasmani');
            $table->string('nama_ayah');
            $table->string('ttl_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('pendidikan_ayah');
            $table->string('agama_ayah');
            $table->string('hp_ayah');
            $table->string('nama_ibu');
            $table->string('ttl_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('pendidikan_ibu');
            $table->string('agama_ibu');
            $table->string('hp_ibu');
            $table->string('nama_wali');
            $table->string('ttl_wali');
            $table->string('pekerjaan_wali');
            $table->string('pendidikan_wali');
            $table->string('hub_wali');
            $table->string('agama_wali');
            $table->string('hp_wali');
            $table->string('email_wali');
            $table->integer('indo');
            $table->integer('mate');
            $table->integer('ipa');
            $table->integer('pai');
            $table->integer('ips');
            $table->string('prestasi');
            $table->string('info');
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
        Schema::dropIfExists('students');
    }
}
