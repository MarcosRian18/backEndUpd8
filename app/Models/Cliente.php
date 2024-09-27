<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = ['cpf', 'nome', 'data_nascimento', 'sexo', 'endereco', 'cidade_id', 'estado_id'];


    public function cidade(){
        return $this->belongsTo(Cliente::class);
    }

    public function estado(){
        return $this->belongsTo(Estado::class);
    }

    public function representates(){
        return $this->belongsToMany(Representante::class, 'clientes_representantes');
    }
}
