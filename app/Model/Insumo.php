<?php
App::uses('AppModel', 'Model');
/**
 * Insumo Model
 *
 * @property Proveedore $Proveedore
 */
class Insumo extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'codigo';
	public $displayField = 'nombre';
	
	
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
		'Proveedore' => array(
			'className' => 'Proveedore',
			'joinTable' => 'insumos_proveedores',
			'foreignKey' => 'codigo_id',
			'associationForeignKey' => 'identificacion_id',
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
