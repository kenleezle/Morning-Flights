<?php
App::uses('AppModel', 'Model');
/**
 * Mfcounter Model
 *
 * @property Mfcountdate $Mfcountdate
 */
class Mfcounter extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'CounterID';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	// public $belongsTo = array(
	// 	'Mfcountdate' => array(
	// 		'className' => 'Mfcountdate',
	// 		'foreignKey' => 'CounterID',
	// 		// 'conditions' => '',
	// 		// 'fields' => '',
	// 		// 'order' => ''
	// 	)
	// );
}
