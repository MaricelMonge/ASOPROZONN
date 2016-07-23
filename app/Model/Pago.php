<?php
App::uses('AppModel', 'Model');
/**
 * Pago Model
 *
 * @property Socio $Socio
 */
class Pago extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Socio' => array(
			'className' => 'Socio',
			'foreignKey' => 'socio_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
