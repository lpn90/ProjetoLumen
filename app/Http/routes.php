<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', [
    'as' => 'agenda.index',
    'uses' => 'AgendaController@index'
]);

$app->get('/{letra}', [
    'as' => 'agenda.letra',
    'uses' => 'AgendaController@index'
]);

$app->post('search/?{nome}', [
    'as' => 'agenda.search',
    'uses' => 'AgendaController@search'
]);

$app->get('contato/novo', [
    'as' => 'agenda.pessoa.create',
    'uses' => 'PessoaController@create'
]);

$app->post('contato', [
    'as' => 'agenda.pessoa.store',
    'uses' => 'PessoaController@store'
]);

$app->get('contato/{id}/apagar', [
    'as' => 'agenda.pessoa.delete',
    'uses' => 'PessoaController@delete'
]);

$app->delete('contato/{id}', [
    'as' => 'agenda.pessoa.destroy',
    'uses' => 'PessoaController@destroy'
]);

$app->get('contato/{id}/editar', [
    'as' => 'agenda.pessoa.edit',
    'uses' => 'PessoaController@edit'
]);

$app->put('contato/{id}', [
    'as' => 'agenda.pessoa.update',
    'uses' => 'PessoaController@update'
]);

//Telefone

$app->get('telefone/{id}/apagar', [
    'as' => 'agenda.telefone.delete',
    'uses' => 'TelefoneController@delete'
]);

$app->delete('telefone/{id}', [
    'as' => 'agenda.telefone.destroy',
    'uses' => 'TelefoneController@destroy'
]);