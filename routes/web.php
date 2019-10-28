<?php


//rota que chama a tela inicial do laravel
Route::get('/', 'Site\SiteController@index');
//rota para chamar as classes autenticadas no sistema
Auth::routes();
//rota que chama o menu inicial do sistema
Route::get('/home', 'HomeController@index')->name('home');

//ROTAS REFERENTES AO CADASTRO DE TRANSPORTADORAS NO BANCO
//rota que chama a view para efetuar o cadastro no banco de dados
Route::get('transporte','Admin\TransporteController@transporte')->name('transporte.transporte');
//rota que salva os dados no banco na tabela de cadastro de transportadoras
Route::post('salvar','Admin\TransporteController@salvar')->name('transporte.salvar');
//rota para chamar a view de  todas as transportadoras cadastradas no banco
Route::get('listartransporte','Admin\TransporteController@listartransporte')->name('transporte.listartransporte');
//rota para chamar a view de edição de transportadoras
Route::get('/transporte/editar/{id_transportes}','Admin\TransporteController@editar')->name('transporte.editar');
//rota para chamar a view de edição de transportadoras
Route::post('/transporte/atualizar/{id_transportes}','Admin\TransporteController@atualizar')->name('transporte.atualizar');
//rota para chamar a view de edição de transportadoras
Route::get('/transporte/deletar/{id_transportes}','Admin\TransporteController@deletar')->name('transporte.deletar');
//rota para chamar a view de detalhe das transportadoras
Route::get('/transporte/detalhe/{id_transportes}','Admin\TransporteController@detalhe')->name('transporte.detalhe');
//rota para chamar a view de edição de transportadoras
Route::get('admin', 'Admin\IngressoController@ingresso')->name('admin.ingresso');


//ROTAS REFERENTES AO CADASTRO DE VEICULOS NO BANCO
//view para cadastrar os veiculos
Route::get('/veiculo/cadastrar','Admin\VeiculoController@cadastrar')->name('veiculo.cadastrar');
//rota que salva os dados no banco na tabela de cadastro de transportadoras
Route::post('/veiculo/salvar','Admin\VeiculoController@salvar')->name('veiculo.salvar');
//rota que chama a view para efetuar o cadastro no banco de dados
Route::get('/veiculo/editar/{id_veiculo}','Admin\VeiculoController@editar')->name('veiculo.editar');
//rota para chamar a view de edição de transportadoras
Route::post('/veiculo/atualizar/{id_veiculo}','Admin\VeiculoController@atualizar')->name('veiculo.atualizar');
//rota para chamar a view de edição de transportadoras
Route::get('/veiculo/deletar/{id_veiculo}','Admin\VeiculoController@deletar')->name('veiculo.deletar');
//rota que salva os dados no banco na tabela de cadastro de transportadoras
Route::post('gravar','Admin\VeiculoController@gravar')->name('veiculo.gravar');
//rota que chama a view para efetuar o cadastro no banco de dados
Route::get('listar','Admin\VeiculoController@listar')->name('veiculo.listar');

//ROTAS REFERENTES AO CADASTRO DE VEICULOS NO BANCO
//rota chamar a view de cadastro de ingresso
Route::get('ingresso','Admin\IngressoController@cadastrar')->name('ingresso.cadastrar');
Route::get('ingresso/listar','Admin\IngressoController@listar')->name('ingresso.listar');
Route::post('/ingresso/salvar','Admin\IngressoController@salvar')->name('ingresso.salvar');

















Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
