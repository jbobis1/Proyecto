<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaModel extends Model
{
    use HasFactory;
    protected $primayKey = 'id';
    protected $table = 'categoria';
    protected $fillable = [
                'tipo',
        
                'marca',
                'image_cat',
    ];
    


}

