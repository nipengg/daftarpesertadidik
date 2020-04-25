@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
<div class="col-md-8">
    <div class="card shadow-sm border-0">
        <div class="card-header">Data Diri</div>
        <div class="card-body">
            <div class="table-responsive">
            <form id="submit" action="{{url('/creates')}}" method="POST">
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <table class="table">
                    <tbody>
                        <tr>
                            <div class="form-group">
                                <label for="judul" class="col-md-4 control-label">Nama Lengkap</label>
                                <div class="col-md-6">
                                    <input id="nama" type="text" class="form-control" name="nama" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="judul" class="col-md-4 control-label">Nama panggilan</label>
                                <div class="col-md-6">
                                    <input id="nama_panggilan" type="text" class="form-control" name="nama_panggilan" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="judul" class="col-md-4 control-label">Jenis Kelamin</label>
                                <div class="col-md-6">
                                    <input type="radio" id="lakilaki" name="gender" value="laki-laki">
                                    <label for="male">Laki-laki</label> &nbsp;
                                    <input type="radio" id="perempuan" name="gender" value="perempuan">
                                    <label for="female">Perempuan</label> &nbsp;
                                    <input type="radio" id="other" name="gender" value="other">
                                    <label for="other">Other</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="judul" class="col-md-4 control-label">Tempat Tanggal Lahir</label>
                                <div class="col-md-6">
                                    <input id="ttl" type="text" class="form-control" name="ttl" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="judul" class="col-md-4 control-label">Agama</label>
                                <div class="col-md-6">
                                    <input id="nama" type="text" class="form-control" name="agama" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="judul" class="col-md-4 control-label">Cita-cita</label>
                                <div class="col-md-6">
                                    <input id="nama" type="text" class="form-control" name="citacita" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="judul" class="col-md-4 control-label">Hobby</label>
                                <div class="col-md-6">
                                    <input id="nama" type="text" class="form-control" name="hobby" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="judul" class="col-md-4 control-label">Anak Ke:</label>
                                <div class="col-md-6">
                                    <input id="nama" type="text" class="form-control" name="anakke" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="judul" class="col-md-4 control-label">Jumlah Saudara</label>
                                <div class="col-md-6">
                                    <input id="nama" type="text" class="form-control" name="saudara" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="judul" class="col-md-4 control-label">Berat Badan</label>
                                <div class="col-md-6">
                                    <input id="nama" type="text" class="form-control" name="berat" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="judul" class="col-md-4 control-label">Tinggi Badan</label>
                                <div class="col-md-6">
                                    <input id="nama" type="text" class="form-control" name="tinggi" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="judul" class="col-md-4 control-label">Golongan Darah</label>
                                <div class="col-md-6">
                                    <input id="nama" type="text" class="form-control" name="darah" required>
                                </div>
                            </div>
                            <hr/>
                            <div class="form-group">
                                <label for="judul" class="col-md-4 control-label">Alamat</label>
                                <div class="col-md-6">
                                    <textarea name="alamat" id="alamat" cols="30" rows="2" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="judul" class="col-md-4 control-label">Kelurahan</label>
                                <div class="col-md-6">
                                    <input id="nama" type="text" class="form-control" name="kelurahan" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="judul" class="col-md-4 control-label">Kecamatan</label>
                                <div class="col-md-6">
                                    <input id="nama" type="text" class="form-control" name="kecamatan" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="judul" class="col-md-4 control-label">Kota/Kabupaten</label>
                                <div class="col-md-6">
                                    <input id="nama" type="text" class="form-control" name="kota" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="judul" class="col-md-4 control-label">Propinsi</label>
                                <div class="col-md-6">
                                    <input id="nama" type="text" class="form-control" name="propinsi" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="judul" class="col-md-4 control-label">No Telp Rumah</label>
                                <div class="col-md-6">
                                    <input id="nama" type="text" class="form-control" name="telprumah" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="judul" class="col-md-4 control-label">Email</label>
                                <div class="col-md-6">
                                    <input id="nama" type="text" class="form-control" name="email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="judul" class="col-md-4 control-label">Tinggal Dengan</label>
                                <div class="col-md-6">
                                    <input type="radio" id="ortu" name="tinggal" value="orang tua">
                                    <label for="ortu">Orang Tua</label> &nbsp;
                                    <input type="radio" id="asrama" name="tinggal" value="asrama">
                                    <label for="asrama">Asrama</label> &nbsp;
                                    <input type="radio" id="saudara" name="tinggal" value="saudara">
                                    <label for="saudara">Other</label>
                                </div>
                            </div>
                            <hr/>
                            <div class="form-group">
                               1. <label for="judul" class="col-md-4 control-label">Penyakit yang pernah diderita</label>
                                <br/>
                                <div class="col-md-6">
                                 TBC <input id="nama" type="text" class="form-control" name="tbc">
                                </div>
                                <div class="col-md-6">
                                 Malaria <input id="nama" type="text" class="form-control" name="malaria">
                                </div>
                                <div class="col-md-6">
                                 Chotipa <input id="nama" type="text" class="form-control" name="chotipa">
                                </div>
                                <div class="col-md-6">
                                 Cacar <input id="nama" type="text" class="form-control" name="cacar">
                                </div>
                                <div class="col-md-6">
                                 Lain-lain <input id="nama" type="text" class="form-control" name="lain">
                                </div>
                            </div>
                            <div class="form-group">
                                2. <label for="judul" class="col-md-4 control-label">Kelainan jasmani lainnya</label>
                                 <br/>
                                 <div class="col-md-6">
                                   <input id="nama" type="text" class="form-control" name="jasmani">
                                 </div>
                             </div>
                            <hr/>
                            <div class="form-group">
                              1.  <label for="judul" class="col-md-4 control-label">Data Orang Tua/Wali</label>
                                    <div class="col-md-6">
                                        Nama Ayah <input id="nama" type="text" class="form-control" name="ayah" required>
                                    </div>
                                    <div class="col-md-6">
                                        Tempat Tanggal Lahir <input id="nama" type="text" class="form-control" name="ttlayah" required>
                                    </div>
                                    <div class="col-md-6">
                                        Pekerjaan <input id="nama" type="text" class="form-control" name="pekerjaanayah" required>
                                    </div>
                                    <div class="col-md-6">
                                        Pendidikan Terakir <input id="nama" type="text" class="form-control" name="pendidikanayah" required>
                                    </div>
                                    <div class="col-md-6">
                                        Agama <input id="nama" type="text" class="form-control" name="agamaayah" required>
                                    </div>
                                    <div class="col-md-6">
                                        No HP  <input id="nama" type="text" class="form-control" name="nohpayah" required>
                                    </div>
                                    <hr/>
                                    <div class="col-md-6">
                                        Nama Ibu <input id="nama" type="text" class="form-control" name="ibu" required>
                                    </div>
                                    <div class="col-md-6">
                                        Tempat Tanggal Lahir <input id="nama" type="text" class="form-control" name="ttlibu" required>
                                    </div>
                                    <div class="col-md-6">
                                        Pekerjaan <input id="nama" type="text" class="form-control" name="pekerjaanibu" required>
                                    </div>
                                    <div class="col-md-6">
                                        Pendidikan Terakir <input id="nama" type="text" class="form-control" name="pendidikanibu" required>
                                    </div>
                                    <div class="col-md-6">
                                        Agama <input id="nama" type="text" class="form-control" name="agamaibu" required>
                                    </div>
                                    <div class="col-md-6">
                                        No HP  <input id="nama" type="text" class="form-control" name="nohpibu" required>
                                    </div>
                                    <hr/>
                                    <div class="col-md-6">
                                        Nama Wali <input id="nama" type="text" class="form-control" name="wali" required>
                                    </div>
                                    <div class="col-md-6">
                                        Tempat Tanggal Lahir <input id="nama" type="text" class="form-control" name="ttlwali" required>
                                    </div>
                                    <div class="col-md-6">
                                        Pekerjaan <input id="nama" type="text" class="form-control" name="pekerjaanwali" required>
                                    </div>
                                    <div class="col-md-6">
                                        Pendidikan Terakir <input id="nama" type="text" class="form-control" name="pendidikanwali" required>
                                    </div>
                                    <div class="col-md-6">
                                        Hubungan dengan murid <input id="nama" type="text" class="form-control" name="hubwali" required>
                                    </div>
                                    <div class="col-md-6">
                                        Agama <input id="nama" type="text" class="form-control" name="agamawali" required>
                                    </div>
                                    <div class="col-md-6">
                                        No HP  <input id="nama" type="text" class="form-control" name="nohpwali" required>
                                    </div>
                                    <div class="col-md-6">
                                        Email  <input id="nama" type="text" class="form-control" name="emailwali" required>
                                    </div>
                                </div>
                                <hr/>
                                <div class="form-group">
                                    1. <label for="judul" class="col-md-4 control-label">Nilai Rapot</label>
                                     <br/>
                                     <div class="col-md-6">
                                      Nilai Rapot Bahasa Indonesia <input id="nama" type="text" class="form-control" name="indo" required>
                                     </div>
                                     <div class="col-md-6">
                                      Nilai Rapot Agama Islam <input id="nama" type="text" class="form-control" name="islam" required>
                                     </div>
                                     {{-- <div class="col-md-6">
                                      Nilai Raport Bahasa Inggris <input id="nama" type="text" class="form-control" name="inggris" required>
                                     </div> --}}
                                     <div class="col-md-6">
                                      Nilai Rapot Matematika <input id="nama" type="text" class="form-control" name="math" required>
                                     </div>
                                     <div class="col-md-6">
                                      Nilai Rapot IPA <input id="nama" type="text" class="form-control" name="ipa" required>
                                     </div>
                                     <div class="col-md-6">
                                        Nilai Rapot IPS <input id="nama" type="text" class="form-control" name="ips" required>
                                    </div>
                                    <div class="col-md-6">
                                        Prestasi yang Pernah diraih <input id="nama" type="text" class="form-control" name="raih" required>
                                    </div>
                                 </div>
                                 <hr/>
                                 <div class="form-group">
                                    <label for="judul" class="col-md-4 control-label">Informasi SMK Wikrama 1 Garut dari:</label>
                                    <div class="col-md-6">
                                        <input type="radio" id="family" name="info" value="family">
                                        <label for="ortu">Family</label> &nbsp;
                                        <input type="radio" id="website" name="info" value="website">
                                        <label for="asrama">Website</label> &nbsp;
                                        <input type="radio" id="teman" name="info" value="teman">
                                        <label for="saudara">Teman</label>
                                        <input type="radio" id="brosur" name="info" value="brosur">
                                        <label for="saudara">Brosur</label>
                                        <input type="radio" id="Sekolah" name="info" value="sekolah">
                                        <label for="saudara">Sekolah</label>
                                        <input type="radio" id="Facebook" name="info" value="facebook">
                                        <label for="saudara">Facebook</label>
                                        <input type="radio" id="Karyawan/Guru" name="info" value="karyawan">
                                        <label for="saudara">Karyawan/Guru</label>
                                    </div>
                                </div>
                        </tr>
                    </tbody>
                </table>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

