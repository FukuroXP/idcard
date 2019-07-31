@extends('layouts.app')
<style>
    .ttd
    {
        position:absolute;
        top: 430px;
        left: 50px;
        z-index: 1;
    }
    .stampel
    {
        position:absolute;
        top: 410px;
        left: 20px;
        z-index: 2;
    }


</style>
@section('content')
<div class="container d-flex">
    <div class="row">

        <div class="col-6">
            <div class="pb-2">
                <table style="background: {{ $frame->background }}; height: 250px; width: 158px; display: block;">
                    <tr>
                        <td colspan="5" height="57px" align="center">
                            <img src="/storage/{{ $frame->logo }}" style="max-width: 40px">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5" height="12px" align="center">
                            <span><b style="font-size: 9px">PEMERINTAH KABUPATEN</b></span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5" height="18px" align="center">
                            <b style="font-size: 16px">{{ $frame->daerah }}</b>
                        </td>
                    </tr>
                    <tr>
                        <td width="14px"></td>
                        <td height="85px" width="25px"></td>
                        <td width="85px" style="background-color: white"></td>
                        <td height="85px" width="25px"></td>
                        <td width="14px"></td>
                    </tr>
                    <tr>
                        <td height="35px">

                        </td>
                    </tr>
                    <tr>
                        <td width="15px" height="20px"></td>
                        <td colspan="3" style="background-color: white;">

                        </td>
                        <td width="15px" height="20px"></td>
                    </tr>
                    <tr>
                        <td height="15px"></td>
                    </tr>
                </table>
            </div>
            <div>
                <table style="background: {{ $frame->background }};  height: 250px; width: 158px; display: block;">
                    <tr>
                        <td colspan="3" height="15px"></td>
                    </tr>
                    <tr>
                        <td width="29px"></td>
                        <td height="100px" width="100px" style="background-color: white"></td>
                        <td width="29px"></td>
                    </tr>
                    <tr>
                        <td align="center" colspan="3" height="15px">
                            <b style="font-size: 9px">Berlaku s/d {{ $frame->masa_berlaku }}</b>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" colspan="3" height="25px">
                            <b style="font-size: 12px">a.n BUPATI {{ $frame->daerah }}</b>
                            </br><b style="font-size: 9px">Sekertaris Daerah</b></td>
                    </tr>
                    <tr>
                        <td colspan="3" height="30px">
                            <img src="/storage/{{ $frame->ttd }}" class="ttd" style="max-width: 100px">
                            <img src="/storage/{{ $frame->stampel }}" style="max-width: 55px;" class="stampel">
                        </td>
                    </tr>
                    <tr>
                        <td align="center" colspan="3" height="10px">
                            <u><b style="font-size: 12px">{{ $frame->atas_nama }}</b></u>
                            <br><b style="font-size: 8px">Pembina Utama Madya</b>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" colspan="3">
                            <b style="font-size: 9px">NIP. {{ $frame->nip_frame }}</b>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" height="15px"></td>
                    </tr>
                </table>

            </div>
            </div>

    </div>

    <div class="col-12">
        <div class=" pl-2">
            <form enctype="multipart/form-data" action="/cetakgo" method="post">
                @csrf
                <div class="card col-12">
                    <div class="form-group">
                        <input name="frame_id" value="{{ $frame->id }}" hidden>
                    </div>

                    <div class="form-group">
                        <label>Pilih Pegawai</label>
                        <select name="pegawai_id" class="form-control">
                            <option>Pilih</option>
                            @foreach($pegawais as $pegawai)
                                <option value="{{ $pegawai->id }}">{{ $pegawai->nama }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Foto : </label>
                        <input type="file" class="form-control-file" name="foto">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection
