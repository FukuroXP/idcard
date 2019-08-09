@extends('layouts.app')
<style>
    .ttd
    {
        position:absolute;
        top: 160px;
        left: 230px;
        z-index: 1;
    }
    .stampel
    {
        position:absolute;
        top: 145px;
        left: 185px;
        z-index: 2;
    }


</style>
@section('content')
    <div class="container">
        <h4>Pilih Frame</h4>
        <div class="pb-5 float-right">
            <a href="/new_frame" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Frame</a>
        </div>
        <div class="container d-flex">
            <div class="row">
                @foreach($frames as $frame)
                    <a class="btn btn-light pr-3 pb-4" href="/view/{{ $frame->id }}">
                        <div>
                            <label class="text-dark"><b>{{ $frame->judul }}</b></label>
                        </div>
                        <div class="d-flex">
                            <div class="row">
                                <div class="col-6 d-flex">
                                    <div class="pr-2">
                                        <table style="background: {{ $frame->background }}; height: 250px; width: 158px; display: block;">
                                            <tr>
                                                <td colspan="5" height="57px" align="center">
                                                    <img src="/storage/{{ $frame->logo }}" style="max-width: 40px">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="5" height="12px" align="center">
                                                    <span><b style="font-size: 9px">{{ $frame->instansi }}</b></span>
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
                                                    <b style="font-size: 12px">a.n {{ $frame->atas_nama }} {{ $frame->daerah }}</b>
                                                    </br><b style="font-size: 9px">{{ $frame->perwakilan }}</b></td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" height="30px">
                                                    <img src="/storage/{{ $frame->ttd }}" class="ttd" style="max-width: 100px">
                                                    <img src="/storage/{{ $frame->stampel }}" style="max-width: 55px;" class="stampel">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center" colspan="3" height="10px">
                                                    <u><b style="font-size: 12px">{{ $frame->nama_ttd }}</b></u>
                                                    <br><b style="font-size: 8px">{{ $frame->satuan_kerja }}</b>
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
                        </div>
                    </a>

                    <div class="pr-2">
                        {{--                        <div class="pb-2"><a href="edit" class="btn btn-outline-primary"><i class="fa fa-edit"></i> </a></div>--}}
                        {{--                        <div><a href="delete" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a></div>--}}
                    </div>
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                {{ $frames->links() }}
            </div>
        </div>
    </div>
@endsection
