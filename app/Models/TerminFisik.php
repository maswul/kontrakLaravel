<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TerminFisik extends Model
{
    use HasFactory;
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id','pekerjaan_id'];

    public function pekerjaan()
    {
        return $this->belongsTo('App\Models\Pekerjaan');
    }
}
