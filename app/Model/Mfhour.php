<?php
App::uses('AppModel', 'Model');
/**
 * Mfhour Model
 *
 */
class Mfhour extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'HoursID';
	//public $foreignKey = 'DateID';

	public $hasMany = array(
		'Mfcount' => array(
				'className' => 'Mfcount',
				'foreignKey' => 'HoursID',
				//'conditions' => array('Profile.published' => '1'),
				'dependent' => true
		)
	);

	public $belongsTo = array(
		'Mfcountdate' => array(
				'className' => 'Mfcountdate',
				'foreignKey' => 'DateID'
		)
	);


}
