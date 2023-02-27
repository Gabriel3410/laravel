<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class comentarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('comentario')->insert([
            'postagem_id' => 1,
            'conteudo' => 'Primeira Conteudo - Primeiro Conteudo', 
        ]);

        DB::table('comentario')->insert([
            'postagem_id' => 2,
            'conteudo' => 'Segundo Conteudo - Segundo Conteudo', 
        ]);

        DB::table('comentario')->insert([
            'postagem_id' => 3,
            'conteudo' => 'Terceiro Conteudo - Terceiro Conteudo', 
        ]);
    }
}
