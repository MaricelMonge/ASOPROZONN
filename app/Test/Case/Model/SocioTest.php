<?php
App::uses('Socio', 'Model');

/**
 * Socio Test Case
 */
class SocioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.socio',
		'app.producto',
		'app.productos_socio',
		'app.proveedore',
		'app.insumo',
		'app.insumos_proveedore',
		'app.proveedores_socio'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Socio = ClassRegistry::init('Socio');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Socio);

		parent::tearDown();
	}

}
