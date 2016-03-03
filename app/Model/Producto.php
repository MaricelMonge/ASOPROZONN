<?php
App::uses('AppModel', 'Model');
/**
 * Producto Model
 *
 * @property Cliente $Cliente
 * @property Factura $Factura
 * @property Socio $Socio
 */
class Producto extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'codigo';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'codigo' => array(
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
	);

	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Cliente' => array(
			'className' => 'Cliente',
			'joinTable' => 'clientes_productos',
			'foreignKey' => 'producto_id',
			'associationForeignKey' => 'cliente_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Factura' => array(
			'className' => 'Factura',
			'joinTable' => 'facturas_productos',
			'foreignKey' => 'producto_id',
			'associationForeignKey' => 'factura_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Socio' => array(
			'className' => 'Socio',
			'joinTable' => 'productos_socios',
			'foreignKey' => 'producto_id',
			'associationForeignKey' => 'socio_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
