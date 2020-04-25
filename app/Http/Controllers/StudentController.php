<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class StudentController extends Controller
{
    public function index(){
        return view('create');
    }

    public function store(Request $request){
    DB::beginTransaction();
    $student = new Student();
    $student->nama_lengkap = $request->nama;
    $student->nama_panggilan = $request->nama_panggilan;
    $student->jk = $request->gender;
    $student->ttl = $request->ttl;
    $student->agama = $request->agama;
    $student->citacita = $request->citacita;
    $student->hobby = $request->hobby;
    $student->anak_ke = $request->anakke;
    $student->jumlah_saudara = $request->saudara;
    $student->berat_badan = $request->berat;
    $student->tinggi_badan = $request->tinggi;
    $student->golongan_darah = $request->darah;
    $student->alamat_rumah = $request->alamat;
    $student->kelurahan = $request->kelurahan;
    $student->kecamatan = $request->kecamatan;
    $student->kota = $request->kota;
    $student->propinsi = $request->propinsi;
    $student->telp_rumah = $request->telprumah;
    $student->email = $request->email;
    $student->tinggal = $request->tinggal;
    $student->tbc = $request->tbc;
    $student->malaria = $request->malaria;
    $student->chotipa = $request->chotipa;
    $student->cacar = $request->cacar;
    $student->penyakit_lain = $request->lain;
    $student->kelainan_jasmani = $request->jasmani;
    $student->nama_ayah = $request->ayah;
    $student->ttl_ayah = $request->ttlayah;
    $student->pekerjaan_ayah = $request->pekerjaanayah;
    $student->pendidikan_ayah = $request->pendidikanayah;
    $student->agama_ayah = $request->agamaayah;
    $student->hp_ayah = $request->nohpayah;
    $student->nama_ibu = $request->ibu;
    $student->ttl_ibu = $request->ttlibu;
    $student->pekerjaan_ibu = $request->pekerjaanibu;
    $student->pendidikan_ibu = $request->pendidikanibu;
    $student->agama_ibu = $request->agamaibu;
    $student->hp_ibu = $request->nohpibu;
    $student->nama_wali = $request->wali;
    $student->ttl_wali = $request->ttlwali;
    $student->pekerjaan_wali = $request->pekerjaanwali;
    $student->pendidikan_wali = $request->pendidikanwali;
    $student->hub_wali = $request->hubwali;
    $student->agama_wali = $request->agamawali;
    $student->hp_wali = $request->nohpwali;
    $student->email_wali = $request->emailwali;
    $student->indo = $request->indo;
    $student->mate = $request->math;
    $student->ipa = $request->ipa;
    $student->pai = $request->islam;    
    $student->ips = $request->ips;
    $student->prestasi = $request->raih;
    $student->info = $request->info;
    $student->save();
    DB::commit();

    return view('welcome');
    }
}
