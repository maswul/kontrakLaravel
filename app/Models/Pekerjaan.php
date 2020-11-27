<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pekerjaan extends Model
{
    use HasFactory;

    protected $fillable = ['perusahaan_id',
        'program',
        'kegiatan',
        'pekerjaan',
        'tahun',
        'kode_rek',
        'kode_keg',
        'dpa_skpd',
        'hps',
        'tipe',
        'penawaran',
        'nego'
        ];

    public function perusahaan()
    {
        return $this->belongsTo('App\Models\Perusahaan');
    }

    public function jtermin()
    {
        return $this->hasOne("App\Models\JTermin");
    }


}
