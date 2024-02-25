<?php

use App\Http\Controllers\{
    OrcamentoController,
};

use Illuminate\Support\Facades\Route;

/**
 * Rota para pesquisar orçamentos.
 *
 * @method any
 * @uri /orcamento/search
 * @controller OrcamentoController@search
 * @nome orcamento.search
 */
Route::any('/orcamento/search', [OrcamentoController::class,'search'])->name('orcamento.search');

/**
 * Rota para exibir o formulário de criação de orçamento.
 *
 * @method get
 * @uri /orcamento/create
 * @controller OrcamentoController@create
 * @nome orcamento.create
 */
Route::get('/orcamento/create', [OrcamentoController::class,'create'])->name('orcamento.create');

/**
 * Rota para atualizar um orçamento específico.
 *
 * @method put
 * @uri /orcamento/{id}
 * @controller OrcamentoController@update
 * @nome orcamento.update
 */
Route::put('/orcamento/{id}', [OrcamentoController::class,'update'])->name('orcamento.update');

/**
 * Rota para exibir detalhes de um orçamento específico.
 *
 * @method get
 * @uri /orcamento/{id}
 * @controller OrcamentoController@show
 * @nome orcamento.show
 */
Route::get('/orcamento/{id}', [OrcamentoController::class,'show'])->name('orcamento.show');

/**
 * Rota para exibir o formulário de edição de um orçamento específico.
 *
 * @method get
 * @uri /orcamento/edit/{id}
 * @controller OrcamentoController@edit
 * @nome orcamento.edit
 */
Route::get('/orcamento/edit/{id}', [OrcamentoController::class,'edit'])->name('orcamento.edit');

/**
 * Rota para excluir um orçamento específico.
 *
 * @method delete
 * @uri /orcamento/{id}
 * @controller OrcamentoController@destroy
 * @nome orcamento.destroy
 */
Route::delete('/orcamento/{id}', [OrcamentoController::class,'destroy'])->name('orcamento.destroy');

/**
 * Rota para exibir detalhes de um orçamento específico.
 *
 * @method get
 * @uri /orcamento/{id}
 * @controller OrcamentoController@show
 * @nome orcamento.show
 */
Route::get('/orcamento/{id}', [OrcamentoController::class,'show'])->name('orcamento.show');

/**
 * Rota para armazenar um novo orçamento.
 *
 * @method post
 * @uri /orcamento
 * @controller OrcamentoController@store
 * @nome orcamento.store
 */
Route::post('/orcamento',[OrcamentoController::class,'store'])->name('orcamento.store');

/**
 * Rota para listar todos os orçamentos.
 *
 * @method get
 * @uri /orcamento
 * @controller OrcamentoController@index
 * @nome orcamento.index
 */
Route::get('/orcamento', [OrcamentoController::class,'index'])->name('orcamento.index');

/**
 * Rota inicial, exibindo a página de boas-vindas.
 *
 * @method get
 * @uri /
 * @closure função anônima
 */
Route::get('/', function () {
    return view('welcome');
});
