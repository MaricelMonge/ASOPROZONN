<?php
App::uses('AppModel', 'Model');
/**
 * Proveedore Model
 *
 * @property Insumo $Insumo
 * @property Socio $Socio
 */
class Proveedore extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'identificacion';
	public $virtualFields = array('nombre1' => "CONCAT(Proveedore.nombre, ' ', Proveedore.apellido1, ' ', Proveedore.apellido2)");
	public $displayField = 'nombre1';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'identificacion' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'nombre' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'apellido1' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'telefono' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Insumo' => array(
			'className' => 'Insumo',
			'joinTable' => 'insumos_proveedores',
			'foreignKey' => 'identificacion_id',
			'associationForeignKey' => 'codigo_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
);

}
