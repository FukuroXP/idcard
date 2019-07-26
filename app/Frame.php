<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Frame extends Model
{
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class);
    }


//    public function cetak()
//    {
//        return $this->belongsTo(Cetak::class);
//    }

    public function cetaks()
    {
        return $this->hasMany(Cetak::class)->orderBy('created_at', 'DESC');
    }
}
