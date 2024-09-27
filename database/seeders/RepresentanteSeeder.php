<?php

namespace Database\Seeders;

use App\Models\Estado;
use App\Models\Representante;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class RepresentanteSeeder extends Seeder
{
    
    public function run()
    {
        
        $faker = Faker::create('pt_BR');

       
        $representantes = [];

        
        $estados = Estado::with('cidades')->get();

        foreach ($estados as $estado) {
            foreach ($estado->cidades as $cidade) {
                
                for ($i = 1; $i <= 3; $i++) {
                    $representantes[] = [
                        'nome' => $faker->name, 
                        'estado_id' => $estado->id,
                        'cidade_id' => $cidade->id,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ];
                }
            }
        }

        // Insere todos os representantes de uma vez
        DB::table('representantes')->insert($representantes);
    }
}
