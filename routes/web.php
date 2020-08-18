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
//$router->get('/', 'RadioController@index');

$router->get('home', function () {
	return 'Bienvenido!! ';
});

$router->get('post/{post}', 'PostController@shor');

$router->put('post/{post}', 'PostController@update' );


//$router->get('post/{post}', function ($postId){
	//return $postId;
//});

//$router->get('home', function () use ($router) {
    //return 'hola desde home con return';
    //die(); 
//});

//$router->get('home/{home}', function ($homeId) {
	//return "$homeId Hola Mundo";
//

//$router->post('home', function (){
//return 'Post de prueba';
//});

/**
* @api {get} /radio Listar
* @apiName GetRadioListar
* @apiGroup Radio
*
*/
$router->get('/radio', 'RadioController@all');


/**
* @api {post} /radio Agregar
* @apiName GetRadioAgregar
* @apiGroup Radio
*
*/
$router->post('/radio', 'RadioController@store');

/**
* @api {get} /radio/:id Ver
* @apiName GetRadioVer
* @apiGroup Radio
*
*/
$router->get('/radio/{id}', 'RadioController@show');

/**
* @api {put} /radio/:id Actualizar
* @apiName GetRadioActualizar
* @apiGroup Radio
*
*/

$router->put('/radio/{id}', 'RadioController@update');

/**
* @api {delete} /radio/:id Elimina
* @apiName GetRadioEliminar
* @apiGroup Radio
*
*/
$router->delete('/radio/{id}', 'RadioController@destroy');

