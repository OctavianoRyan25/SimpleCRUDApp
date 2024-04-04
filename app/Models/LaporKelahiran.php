<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporKelahiran extends Model
{
    use HasFactory;

    protected $table = 'lapor_kelahirans';

    public function anak()
    {
        return $this->hasOne(DataAnak::class, 'data_kelahiran_id');
    }

    public function ayah()
    {
        return $this->belongsTo(DataAyah::class, 'ayah_id');
    }

    public function ibu()
    {
        return $this->belongsTo(DataIbu::class, 'ibu_id');
    }
}
