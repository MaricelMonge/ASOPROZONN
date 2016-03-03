<?php
App::uses('AppModel', 'Model');
/**
 * Socio Model
 *
 */
class Socio extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'numeroexp';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'numeroexp';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'numeroexp' => array(
			'numeric' => array(
				'rule' => array('numeric'),
			),
		),
		'identificacion' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'unique' => array(
				'rule' => 'isUnique'),
			),
		),
		'nombre' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
			),
		),
		'apellido1' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
			),
		),
		'genero' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
			),
		),
		'area_terreno' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'numeric' => array(
				'rule' => array('numeric')),

			),
		),
		'area_certificada' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'numeric' => array(
				'rule' => array('numeric')),
			),
		),
		'telefono' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
			),
		),
		
	);
	
}
