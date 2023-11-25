<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recorre extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'equipo_id',
        'circuito_id',
    ];

    public function circuits() {
        return $this->belongsToMany(Circuito::class);
    }

    public function teamsRace() {
        return $this->belongsToMany(Equipo::class);
    }

}
