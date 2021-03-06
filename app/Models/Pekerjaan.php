<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Vinkla\Hashids\Facades\Hashids;

class Pekerjaan extends Model
{
    use HasFactory;

    /*protected $fillable = ['perusahaan_id',
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
        ];*/

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id','_token'];
    protected $appends = ['hashid'];

    public function getHashidAttribute()
    {
        return Hashids::encode($this->attributes['id']);
    }


    public function perusahaan()
    {
        return $this->belongsTo('App\Models\Perusahaan');
    }

    public function jtermin()
    {
        return $this->hasOne("App\Models\JTermin");
    }

    public function terminfisik()
    {
        return $this->hasOne("App\Models\TerminFisik");
    }

    public function terminperencanaan()
    {
        return $this->hasOne("App\Models\TerminPerencanaan");
    }

    public function terminpengawasan()
    {
        return $this->hasOne("App\Models\TerminPengawasan");
    }

    public function lelang()
    {
        return $this->hasOne("App\Models\Lelang");
    }

    public function termyn()
    {
        return $this->hasOne("App\Models\termyn");
    }


}
