<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['nome','estado_id'];

    public function estado(){
        return $this->belongsTo(Estado::class);
    }

    public function clientes(){
        return $this->hasMany(Cliente::class);
    }

    public function representantes(){
        return $this->hasMany(Representante::class);
    }
}
