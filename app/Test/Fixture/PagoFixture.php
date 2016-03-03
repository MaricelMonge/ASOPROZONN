<?php
/**
 * Pago Fixture
 */
class PagoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idpago' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'monto' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'idventa_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idpago', 'unique' => 1),
			'idventaFactu' => array('column' => 'idventa_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_spanish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'idpago' => 1,
			'monto' => 1,
			'idventa_id' => 1
		),
	);

}
