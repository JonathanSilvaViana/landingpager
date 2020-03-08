<?php

use Illuminate\Database\Seeder;
use SistemaLaravel\Nivel;

class NivelSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Nivel::insert(['nome' => 'Iniciante', 'descricao' => 'Vamos aprender um pouco mais?']);
        Nivel::insert(['nome' => 'Básico', 'descricao' => 'Podemos melhorar ^^']);
        Nivel::insert(['nome' => 'Intermediário', 'descricao' => 'O esforço espelha seu triunfo']);
        Nivel::insert(['nome' => 'Avançado', 'descricao' => 'Alcançando sonhos']);
        Nivel::insert(['nome' => 'TOPIK', 'descricao' => 'Foco nos objetivos']);
    }
}
