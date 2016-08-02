<?php
App::uses('AppModel', 'Model');
/**
 * Socio Model
 *
 * @property Producto $Producto
 * @property Proveedore $Proveedore
 */
class Socio extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'numeroexp';

	public $virtualFields = array('nombre1' => "CONCAT(Socio.nombre, ' ', Socio.apellido1, ' ', Socio.apellido2)");
	public $displayField = 'nombre1';
	// public $displayField = 'apellido1 ';

	public $actsAs = array(
		'Upload.Upload'=>array(
			'image'=>array(
				'fields'=>array(
					'dir'=>'image_dir'
				),
				'thumbnailMethod'=>'php',
				'thumbnailSizes'=>array(
					'vga'=>'640x480',
					'thumb'=>'150x150'
				),
				'deleteOnUpdate'=>true,
				'deleteFolderOnDelete'=>true
			)
		)
	);

	public $validate = array(
		'numeroexp' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'identificacion' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
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
		'genero' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'area_terreno' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'area_certificada' => array(
			'numeric' => array(
				'rule' => array('numeric'),
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
		'Producto' => array(
			'className' => 'Producto',
			'joinTable' => 'productos_socios',
			'foreignKey' => 'numeroexp_id',
			'associationForeignKey' => 'codigo_id',
			'unique' => 'keepExisting',
		),
	);
	
	// public $hasMany = array(
	// 		'Pago'=>array(
	// 			'className'=>'Pago',
	// 			'foreignKey'=>'pago_id',
	// 			'dependent'=>false,
				
	// 			)
	// 		);	

}
