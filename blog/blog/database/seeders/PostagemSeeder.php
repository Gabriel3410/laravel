<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostagemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('postagem')->insert([
            'titulo' => 'Primeira Postagem',
            'conteudo' => 'Primeira Conteudo' 
        ]);

        DB::table('postagem')->insert([
            'titulo' => 'Segunda Postagem',
            'conteudo' => 'Segundo Conteudo' 
        ]);

        DB::table('postagem')->insert([
            'titulo' => 'Terceiro Postagem',
            'conteudo' => 'Terceiro Conteudo' 
        ]);
    }
}
