<?php

use Illuminate\Database\Seeder;

class VeiculoTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(App\veiculo::class, 10)->create();


        /** DB::table('veiculos')->insert([
     	'Placa'=>'DBC 2344',
        'Tipo'=>'Cavalo',
        'Marca'=>'Volvo',
        'Modelo'=>'FH 440',
        'Peso'=>'9500,00',
        'Ano'=>'2010']);
        **/
    }
}
