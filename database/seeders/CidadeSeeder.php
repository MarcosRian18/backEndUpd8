<?php

namespace Database\Seeders;

use App\Models\Cidade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cidades = [
            ['nome' => 'Rio Branco', 'estado_id' => 1],
            ['nome' => 'Maceió', 'estado_id' => 2],
            ['nome' => 'Macapá', 'estado_id' => 3],
            ['nome' => 'Manaus', 'estado_id' => 4],
            ['nome' => 'Salvador', 'estado_id' => 5],
            ['nome' => 'Fortaleza', 'estado_id' => 6],
            ['nome' => 'Brasília', 'estado_id' => 7],
            ['nome' => 'Vitória', 'estado_id' => 8],
            ['nome' => 'Goiânia', 'estado_id' => 9],
            ['nome' => 'São Luís', 'estado_id' => 10],
            ['nome' => 'Cuiabá', 'estado_id' => 11],
            ['nome' => 'Campo Grande', 'estado_id' => 12],
            ['nome' => 'Belo Horizonte', 'estado_id' => 13],
            ['nome' => 'Belém', 'estado_id' => 14],
            ['nome' => 'João Pessoa', 'estado_id' => 15],
            ['nome' => 'Curitiba', 'estado_id' => 16],
            ['nome' => 'Recife', 'estado_id' => 17],
            ['nome' => 'Teresina', 'estado_id' => 18],
            ['nome' => 'Rio de Janeiro', 'estado_id' => 19],
            ['nome' => 'Natal', 'estado_id' => 20],
            ['nome' => 'Porto Alegre', 'estado_id' => 21],
            ['nome' => 'Porto Velho', 'estado_id' => 22],
            ['nome' => 'Boa Vista', 'estado_id' => 23],
            ['nome' => 'Florianópolis', 'estado_id' => 24],
            ['nome' => 'São Paulo', 'estado_id' => 25],
            ['nome' => 'Aracaju', 'estado_id' => 26],
            ['nome' => 'Palmas', 'estado_id' => 27],
        ];

        foreach ($cidades as $cidade) {
            Cidade::create($cidade);
        }
    }
}
