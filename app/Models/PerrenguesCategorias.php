<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerrenguesCategorias extends Model
{
    use HasFactory;

    protected $table = 'perrengues_categoria';
    
    
    public function perrengues()

    {

        return $this->hasMany(Perrengue::class, 'categoria_id', 'id')->with('modulos');

    }
}
