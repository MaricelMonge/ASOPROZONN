<?php
App::uses('AppModel', 'Model');
/**
 * Proveedore Model
 *
 */
class Proveedore extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'identificacion';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'identificacion';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'identificacion' => array(
			'numeric' => array(
				'rule' => array('numeric'),
			),
		),
		'nombre' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
			),
			'alphaNumeric' => array(
				'rule' => array('alphaNumeric'),
			),
		),
		'apellido1' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
			),
			'alphaNumeric' => array(
				'rule' => array('alphaNumeric'),
			),
		),

		'telefono' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
			),
			'alphaNumeric' => array(
				'rule' => array('alphaNumeric'),
			),
		),


	);
}
