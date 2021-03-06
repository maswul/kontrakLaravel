<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;

    //protected $fillable = ['nama', 'direktur', 'npwp', 'bank', 'rekening', 'alamat', 'kota'];
    protected $guarded = ['id'];

    public function pekerjaan()
    {
        return $this->hasMany('App\Models\Pekerjaan');
    }
}
