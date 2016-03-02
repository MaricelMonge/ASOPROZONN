<?php
/**
 * Socio Fixture
 */
class SocioFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'numeroexp' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'identificacion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'nombre' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'apellido1' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'apellido2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'fecha_nacimiento' => array('type' => 'date', 'null' => true, 'default' => null),
		'telefono' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'email' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'genero' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'fecha_ingreso' => array('type' => 'date', 'null' => true, 'default' => null),
		'lugar_residencia' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'trabajadores_finca' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'area_terreno' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'area_certificada' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'actividad_extra' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'image' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'image_dir' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'numeroexp', 'unique' => 1)
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
			'numeroexp' => 1,
			'identificacion' => 'Lorem ipsum dolor sit amet',
			'nombre' => 'Lorem ipsum dolor sit amet',
			'apellido1' => 'Lorem ipsum dolor sit amet',
			'apellido2' => 'Lorem ipsum dolor sit amet',
			'fecha_nacimiento' => '2016-03-02',
			'telefono' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'genero' => 'Lorem ip',
			'fecha_ingreso' => '2016-03-02',
			'lugar_residencia' => 'Lorem ipsum dolor sit amet',
			'trabajadores_finca' => 1,
			'area_terreno' => 1,
			'area_certificada' => 1,
			'actividad_extra' => 'Lorem ipsum dolor sit amet',
			'image' => 'Lorem ipsum dolor sit amet',
			'image_dir' => 'Lorem ipsum dolor sit amet'
		),
	);

}
