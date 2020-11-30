<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TerminPengawasan extends Model
{
    use HasFactory;

    protected $guarded = ['id','pekerjaan_id'];

    public function pekerjaan()
    {
        return $this->belongsTo('App\Models\Pekerjaan');
    }
}
