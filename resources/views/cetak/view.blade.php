
<style>
    .ttd
    {
        position:absolute;
        top: 520px;
        left: 50px;
        z-index: 1;
    }
    .stampel
    {
        position:absolute;
        top: 500px;
        left: 20px;
        z-index: 2;
    }


</style>

<table style="background: {{ $frame->background }}; height: 250px; width: 158px; table-layout: fixed; transform: scale(-1, 1);">
    <tr>
        <td colspan="18" height="57px" align="center">
            <img src="..\public\storage\{{ $frame->logo }}" style="max-width: 40px">
        </td>
    </tr>
    <tr>
        <td colspan="18" height="12px" align="center">
            <b style="font-size: 9px">PEMERINTAH KABUPATEN</b>
        </td>
    </tr>
    <tr>
        <td colspan="18" height="18px" align="center">
            <b style="font-size: 16px">{{ $frame->daerah }}</b>
        </td>
    </tr>
    <tr>

        <td  colspan="18" width="148px" height="25px" align="center">
            <img src="..\public\storage\{{ $cetak->foto }}">
        </td>

    </tr>
    <tr>
        <td colspan="18" align="center" height="35px">
            <b style="font-size: 9px">{{ $frame->nama }}</b>
            <br><b style="font-size: 9px">{{ $frame->nip }}</b>
        </td>
    </tr>
    <tr>
        <td height="20px"></td>
        <td colspan="16" width="148px" style="background-color: white;">
            {!!DNS1D::getBarcodeHTML( $frame->nip , 'I25',1,20)!!}
        </td>
        <td height="20px"></td>
    </tr>
    <tr>
        <td height="15px"></td>
    </tr>
</table>

<br>
<hr>
<br>

<table style="background: {{ $frame->background }}; height: 250px; width: 158px; table-layout: fixed; transform: rotate(180deg) scale(-1, 1);">
    <tr>
        <td colspan="7" height="15px"></td>
    </tr>
    <tr>
        <td width="29px"></td>
        <td colspan="5" height="100px" width="100px" style="background-color: white;">
           {!!DNS2D::getBarcodeHTML( $frame->nip , 'QRCODE',5,5)!!}
        </td>
        <td width="29px"></td>
    </tr>
    <tr>
        <td align="center" colspan="7" height="15px">
            <b style="font-size: 9px">Berlaku s/d {{ $frame->masa_berlaku }}</b>
        </td>
    </tr>
    <tr>
        <td align="center" colspan="7" height="25px">
            <b style="font-size: 12px">a.n BUPATI {{ $frame->daerah }}</b>
            <br><b style="font-size: 9px">Sekertaris Daerah</b></td>
    </tr>
    <tr>
        <td colspan="9" height="30px">
            <img src="..\public\storage\{{ $frame->ttd }}" class="ttd" style="max-width: 100px">
            <img src="..\public\storage\{{ $frame->stampel }}" style="max-width: 55px;" class="stampel">
        </td>
    </tr>
    <tr>
        <td align="center" colspan="7" height="10px">
            <u><b style="font-size: 12px">{{ $frame->atas_nama }}</b></u>
            <br><b style="font-size: 8px">Pembina Utama Madya</b>
        </td>
    </tr>
    <tr>
        <td align="center" colspan="7">
            <b style="font-size: 9px">NIP. {{ $frame->nip_frame }}</b>
        </td>
    </tr>
    <tr>
        <td colspan="7" height="15px"></td>
    </tr>
</table>
