<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ProdutoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert([
          'nome'=>'Geladeira',
          'quantidade'=>2,
          'valor'=>5900.00,
          'descricao'=>'Side by Side com gelo na porta'
        ]);

        DB::table('produtos')->insert([
          'nome'=>'Fogão',
          'quantidade'=>5,
          'valor'=>950.00,
          'descricao'=>'Painel automático e forno elétrico'
        ]);

        DB::table('produtos')->insert([
          'nome'=>'Microondas',
          'quantidade'=>1,
          'valor'=>1520.00,
          'descricao'=>'Manda SMS quando termina de esquentar'
        ]);

        DB::table('produtos')->insert([
          'nome'=>'Banana',
          'quantidade'=>5,
          'valor'=>2.00,
          'descricao'=>'Bomba de potassio'
        ]);
    }
}
