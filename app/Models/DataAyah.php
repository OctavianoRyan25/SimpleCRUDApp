<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataAyah extends Model
{
    use HasFactory;

    protected $table = 'data_ayahs';

    public function kelahiran()
    {
        return $this->hasMany(LaporKelahiran::class, 'ayah_id');
    }
}
