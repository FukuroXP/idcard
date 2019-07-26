<?php

namespace App\Http\Controllers;

use App\Frame;
use App\Pegawai;
use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class FramesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('frames.create');
    }

    public function store(\App\Frame $frame)
    {
        $data = request()->validate([
            'judul'=>'required',
            'daerah'=>'required',
            'masa_berlaku'=>'required',
            'atas_nama'=>'required',
            'nip_frame'=>'required',
            'background'=>'required',
            'logo'=>['required','image'],
            'ttd'=>['required','image'],
            'stampel'=>['required','image'],
        ]);

        $logoPath = request('logo')->store('logos', 'public');
        $logo = Image::make(public_path("storage/{$logoPath}"));
        $logo->save();

        $ttdPath = request('ttd')->store('ttds', 'public');
        $ttd = Image::make(public_path("storage/{$ttdPath}"));
        $ttd->save();

        $stampelPath = request('stampel')->store('stampels', 'public');
        $stampel = Image::make(public_path("storage/{$stampelPath}"));
        $stampel->save();

        auth()->user()->frames()->create([
            'judul' => $data['judul'],
            'daerah' => $data['daerah'],
            'masa_berlaku' => $data['masa_berlaku'],
            'atas_nama' => $data['atas_nama'],
            'nip_frame' => $data['nip_frame'],
            'background' => $data['background'],
            'logo' => $logoPath,
            'ttd' => $ttdPath,
            'stampel' => $stampelPath,

        ]);

        return redirect('/home');

    }

    public function view(\App\Frame $frame, Pegawai $pegawai)
    {
        $pegawais = Pegawai::get();
        return view('frames.view', compact('frame','pegawai','pegawais'));


    }


}
