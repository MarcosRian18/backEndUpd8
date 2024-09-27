<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cliente;
use Faker\Factory as Faker;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('pt_BR');
        $sexos = ['M', 'F'];
        
    
        $cidadeIds = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27];

        foreach (range(1, 15) as $index) {
            Cliente::create([
                'cpf' => $faker->cpf(false),
                'nome' => $faker->name,
                'data_nascimento' => $faker->date(),
                'sexo' => $sexos[array_rand($sexos)],
                'endereco' => $faker->address,
                'cidade_id' => $faker->randomElement($cidadeIds),
                'estado_id' => $faker->numberBetween(1, 27), 
            ]);
        }
    }
}
