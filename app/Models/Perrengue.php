<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perrengue extends Model
{
    use HasFactory;

    protected $table = 'perrengues';

    public function modulos()

    {

        return $this->hasMany(Modulos::class, 'id_perrengue', 'id');

    }
}
