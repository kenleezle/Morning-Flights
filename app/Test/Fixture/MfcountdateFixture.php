<?php
/**
 * MfcountdateFixture
 *
 */
class MfcountdateFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'DateID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary', 'comment' => 'Primary key for table; autonumber'),
		'MFDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => 'Date count conducted'),
		'Sunrise' => array('type' => 'time', 'null' => true, 'default' => null, 'comment' => 'Time of sunrise standard time'),
		'BeginTime' => array('type' => 'time', 'null' => true, 'default' => null, 'comment' => 'Time count started standard time'),
		'EndTime' => array('type' => 'time', 'null' => true, 'default' => null, 'comment' => 'Time count ended standard time'),
		'CounterID' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'key' => 'index', 'collate' => 'utf8_unicode_ci', 'comment' => 'Relates thecount date record to the observer record of primary counter; related to tbl_mfcounters', 'charset' => 'utf8'),
		'Comments' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1024, 'collate' => 'utf8_unicode_ci', 'comment' => 'Comments regarding overall conditions forthe day.', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'DateID', 'unique' => 1),
			'fk_mfcounter_idx' => array('column' => 'CounterID', 'unique' => 0)
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
			'DateID' => 1,
			'MFDate' => '2014-11-08',
			'Sunrise' => '18:51:04',
			'BeginTime' => '18:51:04',
			'EndTime' => '18:51:04',
			'CounterID' => 'Lorem ipsum dolor sit amet',
			'Comments' => 'Lorem ipsum dolor sit amet'
		),
	);

}
