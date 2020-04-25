@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Daftar pendaftar</div>

                <div class="card-body">
                    <table class="table table-hover">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Nama</td>
                            <td>Nilai Bahasa Indonesia</td>
                            <td>Nilai Matematika</td>
                            <td>Nilai Bahasa Ipa</td>
                            <td>Approved</td>
                        </tr>
                    </thead>
                    @foreach ($students as $student)
                    <tr data-href='/'>
                            <td>{{$student->id}}</td>
                            <td><a href="{{ url('/view/'.$student->id)}}">{{$student->nama_lengkap}}</a></td>
                            <td style="">{{$student->indo}}</td>
                            <td>{{$student->mate}}</td>
                            <td>{{$student->ipa}}</td>
                            <td><button type="submit" class="btn btn-primary">Approved</button></td>
                    </tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });
});
</script>
@endsection
