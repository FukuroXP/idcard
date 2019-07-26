<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cetak extends Model
{
    protected $guarded = [];

    public function frames()
    {
        return $this->hasMany(Frame::class)->orderBy('created_at', 'DESC');
    }

    public function Pegawais()
    {
        return $this->hasMany(Pegawai::class)->orderBy('created_at', 'DESC');
    }
}
