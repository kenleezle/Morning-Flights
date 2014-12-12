<?php
/**
 * MfhourFixture
 *
 */
class MfhourFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'HoursID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary', 'comment' => 'Primary key; autonumber'),
		'DateID' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index', 'comment' => 'Relates the hourly record to the date record; related to tbl_mfcountdates'),
		'HourTime' => array('type' => 'time', 'null' => true, 'default' => null, 'comment' => 'Time count hour started based on increment from sunrise time'),
		'Minutes' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 4, 'unsigned' => false, 'comment' => 'Number of minutes countconducted during the hour'),
		'Comments' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1024, 'collate' => 'utf8_unicode_ci', 'comment' => 'Comments regarding the conditions during specific hour', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'HoursID', 'unique' => 1),
			'DateID' => array('column' => 'DateID', 'unique' => 0)
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
			'HoursID' => 1,
			'DateID' => 1,
			'HourTime' => '18:52:27',
			'Minutes' => 1,
			'Comments' => 'Lorem ipsum dolor sit amet'
		),
	);

}
