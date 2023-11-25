<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompranModel extends Model
{
    use HasFactory;
    protected $primayKey = 'id';
    protected $table = 'compran';
    protected $fillable = [
                'usuario_id',
                'productos_id',
                'unidades',
                
    ];
    
}
