@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <form method="post" enctype="multipart/form-data" action="/framego">
                    @csrf
                    <div class="card-body">

                        <div class="form-group">
                            <label>Judul : </label>
                            <input type="text" class="form-control" name="judul">
                        </div>

                        <div class="form-group">
                            <label>Insatansi : </label>
                            <input type="text" class="form-control" name="instansi">
                        </div>

                        <div class="form-group">
                            <label>Daerah : </label>
                            <input type="text" class="form-control" name="daerah">
                        </div>

                        <div class="form-group">
                            <label>Masa Berlaku : </label>
                            <input type="date" class="form-control" name="masa_berlaku">
                        </div>

                        <div class="form-group">
                            <label>Atas Nama : </label>
                            <input type="text" class="form-control" name="atas_nama">
                        </div>

                        <div class="form-group">
                            <label>Diwakilkan Oleh : </label>
                            <input type="text" class="form-control" name="perwakilan">
                        </div>

                        <div class="form-group">
                            <label>Nama Yang Bertandatangan : </label>
                            <input type="text" class="form-control" name="nama_ttd">
                        </div>

                        <div class="form-group">
                            <label>NIP : </label>
                            <input type="text" class="form-control" name="nip_frame">
                        </div>

                        <div class="form-group">
                            <label>Satuan Kerja : </label>
                            <input type="text" class="form-control" name="satuan_kerja">
                        </div>

                        <div class="form-group">
                            <label>Background : </label>
                            <input type="color" class="form-control" name="background">
                        </div>

                        <div class="form-group">
                            <label>Logo : </label>
                            <input type="file" class="form-control-file" name="logo">
                        </div>

                        <div class="form-group">
                            <label>TTD : </label>
                            <input type="file" class="form-control-file" name="ttd">
                        </div>

                        <div class="form-group">
                            <label>Stampel : </label>
                            <input type="file" class="form-control-file" name="stampel">
                        </div>

                        <div>
                            <button class="btn btn-primary" type="submit">Simpan</button>
                        </div>

                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
@endsection
