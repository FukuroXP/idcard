<?php

namespace App\Http\Controllers;

use App\Cetak;
use App\Frame;
use App\Pegawai;
use DemeterChain\C;
use FontLib\Table\Type\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class CetakController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(\App\Cetak $cetak)
    {

        $data = request()->validate([
            'frame_id'=>'exists:frames,id',
            'pegawai_id'=>'exists:pegawais,id',
            'foto'=>['required','image'],
        ]);

        $fotoPath = request('foto')->store('fotos','public');
        $foto = Image::make(public_path("storage/{$fotoPath}"))->fit(80,85);
        $foto->save();

        $data = Cetak::create([
            'frame_id'=>$data['frame_id'],
            'pegawai_id'=>$data['pegawai_id'],
            'foto'=>$fotoPath,
        ]);
//dd($data->id);
        return redirect('/cetak/'.$data->id);
    }

    public function view(\App\Cetak $cetak, Frame $frame, Pegawai $pegawai)
    {

        $frame = DB::table('cetaks')
            ->join('frames', 'cetaks.frame_id', '=', 'frames.id')
            ->join('pegawais', 'cetaks.pegawai_id', '=', 'pegawais.id')
            ->select('cetaks.*', 'frames.*', 'pegawais.*')
            ->where('cetaks.id', '=',$cetak->id)
            ->get();

foreach ($frame as $frame);

//        dd($frame);

        return view('cetak.view1', compact('cetak','frame','pegawai'));


    }


    public function generatePDF(\App\Cetak $cetak, Frame $frame, Pegawai $pegawai)

    {
        $frame = DB::table('cetaks')
            ->join('frames', 'cetaks.frame_id', '=', 'frames.id')
            ->join('pegawais', 'cetaks.pegawai_id', '=', 'pegawais.id')
            ->select('cetaks.*', 'frames.*', 'pegawais.*')
            ->where('cetaks.id', '=',$cetak->id)
            ->get();

        foreach ($frame as $frame);
//dd($cetak);
        set_time_limit(300);
        $pdf = \PDF::loadView('cetak.view', compact('cetak','frame','pegawai', $frame));
        $pdf->setPaper('A4', 'landscape');
//        return $pdf->download('laporan-pdf.pdf');
        return $pdf->stream();
    }
}
