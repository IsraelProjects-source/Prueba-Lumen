<?php
use Laravel\Lumen\Testing\DatabaseTransaction;

class RadioControllerTest extends TestCase {

	use DatabaseTransaction;

	/**@var String $table nombre de la tabla*/
	Protected $table ='radios';

	/**
	* verifica si la ruta radio rtorna un objeto
	*
	*@return void
	*/
	public function testRadioAll(){

		$radios = factory('App/Radio', 10)->create();

		$this->get('/radio');
		$this->seeStatusCode(200);

		foreach($radios as $radio){
			$this->seeJson([
				'id' => $radio->id,
				'name' => $radio->name,
				'streaming' => $radio->streaming
			]);
	    }
	}    
	/**
	*verifica si la ruta radio retorna su objeto
	*@return void
	*/	
	public function testPostRadioStore(){
		$create = [
			'name' => 'Nombre Radio'
			'streaming' => 'Http://192.168.1.1'
		];

		$this->post('/radios', $create);
		$this->seeStatusCode(201);
		$this->seeJson($create);
		$this->SeeInDatabase($this->table, $create);
	} 	
	/**
	*verifica los radios de una radio
	*@return void
	*/
	public function tesRadioShow(){
		$this->factory('App\Radio')->$create();
		$this->get('/radio/' .$radio->id);
		$this->seeStatusCode(200);
		$this->seeJson([
			'id' =>$radio->id,
			'name' => $radio->name,
			'streaming' => $radio->streaming
		]);
	}

	/**
	*actualiza los datos de una radio
	*@return void
	*/
	public function testPutRadioUpdate(){
		$update = [
			'name' => 'Nombre Radio 2',
			'streaming' => 'http://192.158.1.2'
		];
		$radio = factory('App\Radio')->create();
		$this->put('/radio/'.$radio->id, $update);
		$this->seeJson($update);
		$this->SeeInDatabase($this->table, $update);
	}

	/**
	*borra los datos de una radio
	*@return void
	*/
	public function testDeleteRadioDestroy(){
		$radio = factory('App\Radio')->create();
		$this->delete('/radio/'.$radio->id);
		$this->seeStatusCode(204);
		$this->seeJson(['deleted']);
		$this->isEmpty();
		$this->notseeInDatabase($this->table, ['id'=>$radio->id]);
	}

	
}