<?php

use Illuminate\Database\Seeder;

class TransporteTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
    factory(App\transporte::class, 10)->create();
    //->each(function ($user) {
      //  $user->veiculo()->save(factory(App\veiculo::class)->make());
    //});

     //DB::table('transportes')->insert([
     	//'Nome'=>'Sul transportes',
        //'cnpj'=>'20344315000125',
        //'Endereco'=>'estrada dos casa',
        //'Cidade'=>'itaqui',
        //'Cep'=>'97865000',
        //'Email'=>'sultransporter@gmail.com',
        //'Contato'=>'Joao Martins']);
      }
}