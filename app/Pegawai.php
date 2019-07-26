<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $guarded = [];
    public function cetak()
    {
        return $this->belongsTo(Cetak::class);
    }

    public function cetaks()
    {
        return $this->hasMany(Cetak::class)->orderBy('created_at', 'DESC');
    }
}
