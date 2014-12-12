<?php
/**
 * MfcounterFixture
 *
 */
class MfcounterFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'CounterID' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 64, 'key' => 'primary', 'collate' => 'utf8_unicode_ci', 'comment' => 'Alpha code for counter. Utilize last name and first initial.', 'charset' => 'utf8'),
		'CountFirst' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8_unicode_ci', 'comment' => 'First name of counter', 'charset' => 'utf8'),
		'CountMid' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8_unicode_ci', 'comment' => 'Middle name of counter', 'charset' => 'utf8'),
		'CountLast' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 128, 'collate' => 'utf8_unicode_ci', 'comment' => 'Last name of counter', 'charset' => 'utf8'),
		'CountEmail' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 128, 'collate' => 'utf8_unicode_ci', 'comment' => 'Email for counter', 'charset' => 'utf8'),
		'CountComments' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1024, 'collate' => 'utf8_unicode_ci', 'comment' => 'Comments re: counter to be maintained for program.', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'CounterID', 'unique' => 1)
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
			'CounterID' => 'Lorem ipsum dolor sit amet',
			'CountFirst' => 'Lorem ipsum dolor sit amet',
			'CountMid' => 'Lorem ipsum dolor sit amet',
			'CountLast' => 'Lorem ipsum dolor sit amet',
			'CountEmail' => 'Lorem ipsum dolor sit amet',
			'CountComments' => 'Lorem ipsum dolor sit amet'
		),
	);

}
