<?php
/**
 * WcmweatherFixture
 *
 */
class WcmweatherFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'wcmweather';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'WCMID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary', 'comment' => 'West Cape May Hourly record primary key; autonumber'),
		'HoursID' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index', 'comment' => 'Relates the hourly weather record to the hour of count for a certain date; related to tbl_mfhours'),
		'StationID' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 16, 'key' => 'index', 'collate' => 'utf8_unicode_ci', 'comment' => 'Relates the hourly weather record to a station description; related to tbl_mfweatherstations', 'charset' => 'utf8'),
		'WeatherTime' => array('type' => 'time', 'null' => true, 'default' => null, 'comment' => 'Time of hourly reading'),
		'TempAvg' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false, 'comment' => 'Average temperature in degrees F'),
		'TempMin' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false, 'comment' => 'Minimum temperature in degrees F'),
		'TempMax' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false, 'comment' => 'Maximum temperature in degrees F'),
		'RelHumAvg' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false, 'comment' => 'Average relative humidity in percent to the tenths'),
		'RelHumMin' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false, 'comment' => 'Minimum relative humidity in percent to the tenths'),
		'RelHumMax' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false, 'comment' => 'Maximum relative humidity in percent to the tenths'),
		'DewPointAvg' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false, 'comment' => 'Average dew point temperature in degrees F'),
		'DewPointMin' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false, 'comment' => 'Minimum dew point temperature in degrees F'),
		'DewPointMax' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'Precip' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false, 'comment' => 'Precipitation in inches to hundredths'),
		'WindSpeedAvg' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false, 'comment' => 'Average wind speed'),
		'WindDirAvg' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false, 'comment' => 'Average wind direction in degrees from true north'),
		'WindSpeedMax' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false, 'comment' => 'Maximum wind speed'),
		'WindDirMax' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false, 'comment' => 'Maximum wind direction in degrees from true north'),
		'Comments' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1024, 'collate' => 'utf8_unicode_ci', 'comment' => 'Comments regarding data', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'WCMID', 'unique' => 1),
			'HoursID' => array('column' => array('HoursID', 'StationID'), 'unique' => 0),
			'StationID' => array('column' => 'StationID', 'unique' => 0)
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
			'WCMID' => 1,
			'HoursID' => 1,
			'StationID' => 'Lorem ipsum do',
			'WeatherTime' => '18:53:10',
			'TempAvg' => 1,
			'TempMin' => 1,
			'TempMax' => 1,
			'RelHumAvg' => 1,
			'RelHumMin' => 1,
			'RelHumMax' => 1,
			'DewPointAvg' => 1,
			'DewPointMin' => 1,
			'DewPointMax' => 1,
			'Precip' => 1,
			'WindSpeedAvg' => 1,
			'WindDirAvg' => 1,
			'WindSpeedMax' => 1,
			'WindDirMax' => 1,
			'Comments' => 'Lorem ipsum dolor sit amet'
		),
	);

}
