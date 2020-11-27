<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JTermin extends Model
{
    use HasFactory;

    protected $fillable = [
        "pekerjaan_id",
        "no_spk",
        "no_ba_lapdal",
        "no_ba_lapkhir",
        "no_bast_lapdal",
        "no_bast_lapkhir",
        "no_bast_pekerjaan",
        "no_bast_pembayaran",
        //tanggal
        "tgl_spk",
        "tgl_ba_lapdal",
        "tgl_ba_lapkhir",
        "tgl_bast_lapdal",
        "tgl_bast_lapkhir",
        "tgl_bast_pekerjaan",
        "tgl_bast_pembayaran",
        //lelang
        'tgl_0',

        'tgl_1',
        'no_1',
        'tgl_2',
        'no_2',
        'tgl_3',
        'no_3',
        'tgl_4',
        'no_4',
        'tgl_5',
        'no_5',
        'tgl_6',
        'no_6',
        'tgl_7',
        'no_7',
        'tgl_8',
        'no_8',
        'tgl_9',
        'no_9',
        'tgl_10',
        'no_10',
        'tgl_11',
        'no_11',
        'tgl_12',
        'no_12',
        'tgl_13',
        'no_13',
        'tgl_14',
        'no_14',
        'tgl_15',
        'no_15',

        'tgl_16',

        'tgl_17',
        'no_17',
        'tgl_18',
        'no_18',

        'tgl_19',
    ];

    public function pekerjaan()
    {
        return $this->belongsTo('App\Models\Pekerjaan');
    }
}
