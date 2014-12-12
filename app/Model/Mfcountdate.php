<?php
App::uses('AppModel', 'Model');
/**
 * Mfcountdate Model
 *
 */
class Mfcountdate extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'DateID';

	public $hasMany = array(
        'Mfhour' => array(
            'className' => 'Mfhour',
            'foreignKey' => 'DateID',
            //'conditions' => array('Comment.status' => '1'),
            //'order' => 'Comment.created DESC',
            //'limit' => '5',
            'dependent' => true
        )

    );


	public $hasOne = array(
		'Mfcounter' => array(
			'className' => 'Mfcounter',
			'foreignKey' => 'CounterID'
		//'conditions' => array('Profile.published' => '1'),
		//'dependent' => true
		)
	);

}
