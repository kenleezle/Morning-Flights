<?php
/**
 * MfcountFixture
 *
 */
class MfcountFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'CountID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary', 'comment' => 'Primary key; autonumber'),
		'HoursID' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index', 'comment' => 'Relates the species count record to the hour of count for a certain date; related to tbl_mfhours'),
		'SpeciesID' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'key' => 'index', 'collate' => 'utf8_unicode_ci', 'comment' => 'Code for species counted; restricted to species codes in related tbl_mfspecies', 'charset' => 'utf8'),
		'SpeciesCount' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 8, 'unsigned' => true, 'comment' => 'Number of individuals counted for the hour'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'CountID', 'unique' => 1),
			'HoursID' => array('column' => 'HoursID', 'unique' => 0),
			'SpeciesID' => array('column' => 'SpeciesID', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'CountID' => 1,
			'HoursID' => 1,
			'SpeciesID' => 'Lorem ip',
			'SpeciesCount' => 1
		),
	);

}
