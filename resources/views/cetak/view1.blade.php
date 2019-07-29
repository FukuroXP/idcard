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
<div class="container">

    <div class="d-flex">
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
                            <td width="85px" align="center">
                                <img src="/storage/{{ $cetak->foto }}">
                            </td>
                            <td height="85px" width="25px"></td>
                            <td width="14px"></td>
                        </tr>
                        <tr>
                            <td colspan="5" align="center" height="35px">
                                <span><b style="font-size: 9px">{{ $frame->nama }}</b></span>
                                <span><b style="font-size: 9px">{{ $frame->nip }}</b></span>
                            </td>
                        </tr>
                        <tr>
                            <td width="15px" height="20px"></td>
                            <td colspan="3" style="background-color: white;">
                                <div>{!!DNS1D::getBarcodeHTML( $frame->nip , 'I25',1,20)!!}</div>
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
                            <td height="100px" width="100px" style="background-color: white">
                                <div align="center">{!!DNS2D::getBarcodeHTML( $frame->nip , 'QRCODE',4,4)!!}</div>
                            </td>
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
    </div>
    <div class="row col-6 pt-3">
        <a class="btn btn-primary" href="/print/{{ $cetak->id }}">Print</a>
    </div>
</div>
@endsection
