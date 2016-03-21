<?php
/**
 * Venta Fixture
 */
class VentaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'codigo_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'cantidad' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'subtotal' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => '8,4', 'unsigned' => false),
		'reserva' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => '8,4', 'unsigned' => false),
		'pago' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => '8,4', 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'ventas_ibfk_1' => array('column' => 'codigo_id', 'unique' => 0)
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
			'id' => 1,
			'codigo_id' => 1,
			'cantidad' => 1,
			'subtotal' => '',
			'reserva' => '',
			'pago' => '',
			'created' => '2016-03-21 16:38:47'
		),
	);

}
