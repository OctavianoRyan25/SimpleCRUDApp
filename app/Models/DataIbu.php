<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataIbu extends Model
{
    use HasFactory;

    protected $table = 'data_ibus';

    public function kelahiran()
    {
        return $this->hasMany(LaporKelahiran::class, 'ibu_id');
    }
}
