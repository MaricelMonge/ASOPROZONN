<?php
App::uses('Factura', 'Model');

/**
 * Factura Test Case
 */
class FacturaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.factura',
		'app.producto',
		'app.cliente',
		'app.clientes_producto',
		'app.facturas_producto',
		'app.socio',
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
		$this->Factura = ClassRegistry::init('Factura');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Factura);

		parent::tearDown();
	}

}
