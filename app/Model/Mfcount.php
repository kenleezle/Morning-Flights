<?php
App::uses('AppModel', 'Model');
/**
 * Mfcount Model
 *
 */
class Mfcount extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'CountID';

	public $belongsTo = array(
        'Mfhour' => array(
            'className' => 'Mfhour',
            'foreignKey' => 'HoursID',
						//'conditions' => array('Profile.published' => '1'),
						'dependent' => true
        )
    );

	public $hasOne = array(
			'Mfspecy' => array(
				'className' => 'Mfspecy',
				'foreignKey' => 'SpeciesID',
				'dependent' => true
			)
	);

}
