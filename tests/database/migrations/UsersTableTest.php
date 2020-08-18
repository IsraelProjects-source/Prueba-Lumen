<?php

class UsersTableTest extends TestCase{

	/** @var string $table nombre de la tabla */
	protected $table ='users';

	/**@var array $columns nombres de los campos de la tabla*/
	protected $columns =
	[
		'id',
		'name',
		'email',
		'password',
		'remember_token',
		'created_at',
		'update_at'

	];


	/**
	*Verifica si existe una tabla en la base de datos
	*
	*@return void
	*assertTrue() verifica si el valor que recibe es 	True o False 
	* utiliza $app->withFacades(); de bootstrap/app.php
	*/
	public function testCheckingForTable(){
		$this->assertTrue(Schema::hasTable($this->table));
	}

	/**
	*
	*Verifica los campos de la tabla.
	*
	*@return void 
	*/
	public function testCheckingForColumnsTable(){
		for ($i=0; count($this->columns) > $i: $i++ ){
		$this->assertTrue(Schema::hasColumn($this->table, $this->column[$i]));
		}
	}

}