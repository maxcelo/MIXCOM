<?php

Route::get('/', function () {
    return view('index');
});

Route::get('testeCarrinho', 'CarrinhoController@index')->name('Carrinho');
Route::post('testeCarrinho', 'CarrinhoController@adicionar');

Route::get('/testeMeusDados', function () {
    return view('meusDados');
});
Route::get('/testeFinalizarCompra', function () {
    return view('finalizarCompra');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/Inicio', function () {
    return view('index');
})->name('index');

Route::prefix('/Cadastro')->group(function () {

    Route::get('cadastroFisico', 'RegisterFisController@index')->name('CadastroFis');
    Route::post('cadastroFisico', 'RegisterFisController@store');

    Route::get('cadastroJuridico', 'RegisterJurController@index')->name('telaCadastroJur');
    Route::post('cadastroJuridico', 'RegisterJurController@store');

});

Route::get('cadastroJuridico', function () {
    return view('auth\telaCadastroJur');
})->name('cadastrojur');
Route::post('cadastroJuridico', 'RegisterJurController@store');

Route::get('CadastroEndereco', 'RegisterEndController@index')->name('end');
Route::post('CadastroEndereco', 'RegisterEndController@store');

Route::get('/Cadastrar', function(){
    return view('auth/register');
});

Route::prefix('/Produto')->group(function () {

Route::get('Catracas', function () {
    return view('produtoCatraca');
})->name('produtoCatraca');


Route::get('ComprarCatracas', function () {
    return view('catraca');
})->name('catraca');


});

Route::get('alterar-senha', function () {
    return view('passwords\reset');
})->name('altersenha');


Route::get('test', function()
{
    dd(Config::get('mail'));
});


Route::get('/produto/{id}', 'ProdutoController@index');

Route::get('mercadopago', 'MercPagoController@index')->name('mercpago');

/*

Route::get('/editarPerfil', function(){
    return view('editarPerfil');
});

Route::get('/editarPerfilFisica', function(){
    return view('editarPerfilPFisica');
});
Route::get('editarPerfilJur/{id}', 'RegisterJurController@edit');
Route::post('editarPerfilJur/{id}', 'RegisterJurController@update');

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('calcula/{cep}', 'CorreiosController@calcula');

Route::get('/produto/categoria/{codtipo}', 'ProdutoController@productList');

