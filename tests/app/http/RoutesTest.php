<?php

/**estos test verifican la respuesta de cada ruta
* devuele estatus de 200 */
/**class RoutesTest extends TestCase {

	public function testGetRadio(){
		$response $this->call('GET', '/radio');
		$this->assertEquals(200, $response->status());
	}

	public function testPostRadio(){
		$response $this->call('POST', '/radio');
		$this->assertEquals(200, $response->status());
	}

	public function testGetRadioId(){
		$response $this->call('GET', '/radio/'.rand());
		$this->assertEquals(200, $response->status());
	}

	public function testPutRadioId(){
		$response $this->call('PUT', '/radio/'.rand());
		$this->assertEquals(200, $response->status());
	}

	public function testDeleteRadioId(){
		$response $this->call('DELETE', '/radio/'.rand());
		$this->assertEquals(200, $response->status());
	}

}*/