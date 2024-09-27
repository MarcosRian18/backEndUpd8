<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['nome', 'sigla'];

    public function cidades(){
        return $this->hasMany(Cidade::class);
    }

    public function clientes(){
        return $this->hasMany(Cliente::class);
    }

    public function representantes(){
        return $this->hasMany(Representante::class);
    }
}
