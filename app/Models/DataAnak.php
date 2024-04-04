<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataAnak extends Model
{
    use HasFactory;

    protected $table = 'data_anaks';

    public function kelahiran()
    {
        return $this->belongsTo(LaporKelahiran::class, 'data_kelahiran_id');
    }
}
