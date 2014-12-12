<?php
/**
 * MfweatherstationFixture
 *
 */
class MfweatherstationFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'StationID' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 16, 'key' => 'primary', 'collate' => 'utf8_unicode_ci', 'comment' => 'Station code utilizing the WBAN unique weather station code for definition', 'charset' => 'utf8'),
		'StationType' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 32, 'collate' => 'utf8_unicode_ci', 'comment' => 'Alphnumeric code used by weather stations to deermine station type. See metadata for definitions.', 'charset' => 'utf8'),
		'StationName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 128, 'collate' => 'utf8_unicode_ci', 'comment' => 'Name of the weather station', 'charset' => 'utf8'),
		'Latitude' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false, 'comment' => 'Latitude of station'),
		'Longitude' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false, 'comment' => 'Longitude of station'),
		'SourceURL' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 256, 'collate' => 'utf8_unicode_ci', 'comment' => 'Station URL where data was retrieved', 'charset' => 'utf8'),
		'Metadata' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => 'Metadata documents describing hourly weather station data', 'charset' => 'utf8'),
		'Comments' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4096, 'collate' => 'utf8_unicode_ci', 'comment' => 'Comments regarding data retrieved and conversions of original data to formats for database', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'StationID', 'unique' => 1)
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
			'StationID' => 'Lorem ipsum do',
			'StationType' => 'Lorem ipsum dolor sit amet',
			'StationName' => 'Lorem ipsum dolor sit amet',
			'Latitude' => 1,
			'Longitude' => 1,
			'SourceURL' => 'Lorem ipsum dolor sit amet',
			'Metadata' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'Comments' => 'Lorem ipsum dolor sit amet'
		),
	);

}
