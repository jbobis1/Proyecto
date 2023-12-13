<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Circuito extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'nombre',
        'vueltas',
        'kmsVuelta',
        'fotoCircuit',
        'Jornada',
    ];


    public function racingE() {
        return $this->belongsToMany(Recorre::class);
    }
}
