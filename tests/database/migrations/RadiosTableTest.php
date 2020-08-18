<?php

class RadiosTableTest extends TestCase{

	/**@var string $table nombre de la tabla */
	protected $table = 'radios';

	/**@var array $columns nombres de los campos de la tabla*/
	protected $columns =
	[
		'id',
		'name',
		'streaming',
		'created_at',
		'update_at'
	];

	/**
	*
	*verifica la existencia de una tabla
	*@return void
	*/
	public function testCheckingForTable(){
		$this->assertTrue(Schema::hasTable($this->table))
	}
	/**
	*
	*verifica la existencia de las columnas de la tabla
	*@return void
	*/
	public function testCheckingForColumn(){
		for($i=0;count($this->columns>$i;$i++)){
		$this->assertTrue(Schema::hasColumn($this->columns[$i]));
		}
	}
}