<?php
/**
 * NcdcweatherFixture
 *
 */
class NcdcweatherFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'ncdcweather';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'NCDCID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary', 'comment' => 'NCDC Hourly record primary key; autonumber'),
		'HoursID' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index', 'comment' => 'Relates the horly weather record to the hour of count for a certain date; related to tbl_mfhours'),
		'StationID' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 16, 'key' => 'index', 'collate' => 'utf8_unicode_ci', 'comment' => 'Relates the hourly weather record to a station description; related to tbl_mfweatherstations', 'charset' => 'utf8'),
		'WeatherTime' => array('type' => 'time', 'null' => true, 'default' => null, 'comment' => 'Time of hourly reading'),
		'SkyCondition' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8_unicode_ci', 'comment' => 'Sky conditions below 12,000 feet above ground level', 'charset' => 'utf8'),
		'SkyConditionFlag' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_unicode_ci', 'comment' => 'Coded \'S\' for suspect data', 'charset' => 'utf8'),
		'Visibility' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 3, 'unsigned' => false, 'comment' => 'Visibility in statute miles'),
		'VisibilityFlag' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_unicode_ci', 'comment' => 'Coded \'S\' for suspect data', 'charset' => 'utf8'),
		'WeatherType' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_unicode_ci', 'comment' => 'Code system for weather condition types; can be characterized with + or - sign', 'charset' => 'utf8'),
		'WeatherTypeFlag' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_unicode_ci', 'comment' => 'Coded \'S\' for suspect data', 'charset' => 'utf8'),
		'DryBulbFarenheit' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 3, 'unsigned' => false, 'comment' => 'Dry bulb temperature in whole degrees F'),
		'DryBulbFarenheitFlag' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_unicode_ci', 'comment' => 'Coded \'S\' for suspect data', 'charset' => 'utf8'),
		'DryBulbCelsius' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false, 'comment' => 'Dry bulb temperatures in degrees to the tenths C'),
		'DryBulbCelsiusFlag' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_unicode_ci', 'comment' => 'Coded \'S\' for suspect data', 'charset' => 'utf8'),
		'WetBulbFarenheit' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 3, 'unsigned' => false, 'comment' => 'Wet bulb temperature in whole degrees F'),
		'WetBulbFarenheitFlag' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_unicode_ci', 'comment' => 'Codes \'S\' for suspect data', 'charset' => 'utf8'),
		'WetBulbCelsius' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false, 'comment' => 'Wet bulb temperature in degrees to the tenths C'),
		'WetBulbCelsiusFlag' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_unicode_ci', 'comment' => 'Coded \'S\' for suspect data', 'charset' => 'utf8'),
		'DewPointFarenheit' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 3, 'unsigned' => false, 'comment' => 'Dew point temperature in whole degrees F'),
		'DewPointFarenheitFlag' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_unicode_ci', 'comment' => 'Coded \'S\' for suspect data', 'charset' => 'utf8'),
		'DewPointCelsius' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false, 'comment' => 'Dew point temperature in degrees to the tenths C'),
		'DewPointCelsiusFlag' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_unicode_ci', 'comment' => 'Coded \'S\' for suspect', 'charset' => 'utf8'),
		'RelativeHumidity' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 3, 'unsigned' => false, 'comment' => 'Relative humidity in percent'),
		'RelativeHumidityFlag' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_unicode_ci', 'comment' => 'Coded \'S\' for suspect data', 'charset' => 'utf8'),
		'WindSpeed' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 9, 'unsigned' => false, 'comment' => 'Wind speed in mph'),
		'WindSpeedFlag' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_unicode_ci', 'comment' => 'Coded \'S\' for suspect data', 'charset' => 'utf8'),
		'WindDirection' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 8, 'unsigned' => false, 'comment' => 'Wind direction in degrees from true north'),
		'WindDirectionFlag' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_unicode_ci', 'comment' => 'Coded \'S\' for suspect data', 'charset' => 'utf8'),
		'ValueforWindCharacter' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 9, 'unsigned' => false, 'comment' => 'Wind characteristic gusts in mph'),
		'ValueforWindCharacterFlag' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_unicode_ci', 'comment' => 'Coded \'S\' for suspect data', 'charset' => 'utf8'),
		'StationPressure' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false, 'comment' => 'Station pressure in inches to hundredths'),
		'StationPressureFlag' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_unicode_ci', 'comment' => 'Coded \'S\' for suspect data', 'charset' => 'utf8'),
		'PressureTendency' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 3, 'unsigned' => false, 'comment' => 'Code system for pressure tendency'),
		'PressureTendencyFlag' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_unicode_ci', 'comment' => 'Coded \'S\' for suspect data', 'charset' => 'utf8'),
		'PressureChange' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 3, 'unsigned' => false, 'comment' => 'Net 3 hour pressure change in millebars'),
		'PressureChangeFlag' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_unicode_ci', 'comment' => 'Coded \'S\' for suspect data', 'charset' => 'utf8'),
		'SeaLevelPressure' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false, 'comment' => 'Sea level pressure in inches to hundredths'),
		'SeaLevelPressureFlag' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_unicode_ci', 'comment' => 'Coded \'S\' for suspect data', 'charset' => 'utf8'),
		'RecordType' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_unicode_ci', 'comment' => 'Type of hourly report: coded AA for routine; SP for special conditions', 'charset' => 'utf8'),
		'RecordTypeFlag' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_unicode_ci', 'comment' => 'Coded \'S\' for suspect data', 'charset' => 'utf8'),
		'HourlyPrecip' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false, 'comment' => 'Hourly precipitation in inches to hundredths'),
		'HourlyPrecipFlag' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_unicode_ci', 'comment' => 'Coded \'S\' for suspect data', 'charset' => 'utf8'),
		'Altimeter' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false, 'comment' => 'Altimeter reading in inches to hundredths'),
		'AltimeterFlag' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_unicode_ci', 'comment' => 'Coded \'S\' for suspect data', 'charset' => 'utf8'),
		'Comments' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1024, 'collate' => 'utf8_unicode_ci', 'comment' => 'Comments regarding data', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'NCDCID', 'unique' => 1),
			'HoursID' => array('column' => 'HoursID', 'unique' => 0),
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
			'NCDCID' => 1,
			'HoursID' => 1,
			'StationID' => 'Lorem ipsum do',
			'WeatherTime' => '18:53:00',
			'SkyCondition' => 'Lorem ipsum dolor sit amet',
			'SkyConditionFlag' => 'Lorem ipsum dolor sit ame',
			'Visibility' => 1,
			'VisibilityFlag' => 'Lorem ipsum dolor sit ame',
			'WeatherType' => 'L',
			'WeatherTypeFlag' => 'Lorem ipsum dolor sit ame',
			'DryBulbFarenheit' => 1,
			'DryBulbFarenheitFlag' => 'Lorem ipsum dolor sit ame',
			'DryBulbCelsius' => 1,
			'DryBulbCelsiusFlag' => 'Lorem ipsum dolor sit ame',
			'WetBulbFarenheit' => 1,
			'WetBulbFarenheitFlag' => 'Lorem ipsum dolor sit ame',
			'WetBulbCelsius' => 1,
			'WetBulbCelsiusFlag' => 'Lorem ipsum dolor sit ame',
			'DewPointFarenheit' => 1,
			'DewPointFarenheitFlag' => 'Lorem ipsum dolor sit ame',
			'DewPointCelsius' => 1,
			'DewPointCelsiusFlag' => 'Lorem ipsum dolor sit ame',
			'RelativeHumidity' => 1,
			'RelativeHumidityFlag' => 'Lorem ipsum dolor sit ame',
			'WindSpeed' => 1,
			'WindSpeedFlag' => 'Lorem ipsum dolor sit ame',
			'WindDirection' => 1,
			'WindDirectionFlag' => 'Lorem ipsum dolor sit ame',
			'ValueforWindCharacter' => 1,
			'ValueforWindCharacterFlag' => 'Lorem ipsum dolor sit ame',
			'StationPressure' => 1,
			'StationPressureFlag' => 'Lorem ipsum dolor sit ame',
			'PressureTendency' => 1,
			'PressureTendencyFlag' => 'Lorem ipsum dolor sit ame',
			'PressureChange' => 1,
			'PressureChangeFlag' => 'Lorem ipsum dolor sit ame',
			'SeaLevelPressure' => 1,
			'SeaLevelPressureFlag' => 'Lorem ipsum dolor sit ame',
			'RecordType' => '',
			'RecordTypeFlag' => 'Lorem ipsum dolor sit ame',
			'HourlyPrecip' => 1,
			'HourlyPrecipFlag' => 'Lorem ipsum dolor sit ame',
			'Altimeter' => 1,
			'AltimeterFlag' => 'Lorem ipsum dolor sit ame',
			'Comments' => 'Lorem ipsum dolor sit amet'
		),
	);

}
