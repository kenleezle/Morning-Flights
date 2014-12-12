<?php
/**
 * MfspecyFixture
 *
 */
class MfspecyFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'SpeciesID' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary', 'collate' => 'utf8_unicode_ci', 'comment' => 'Species code - alpha code based primarily onthe four character code system by the USGS BBL.', 'charset' => 'utf8'),
		'FamilySci' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8_unicode_ci', 'comment' => 'Species scientific family name', 'charset' => 'utf8'),
		'FamilyCommon' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 128, 'collate' => 'utf8_unicode_ci', 'comment' => 'Species common family name', 'charset' => 'utf8'),
		'Genus' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 128, 'collate' => 'utf8_unicode_ci', 'comment' => 'Species genus name', 'charset' => 'utf8'),
		'SpeciesSci' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 128, 'collate' => 'utf8_unicode_ci', 'comment' => 'Species complete scientific name', 'charset' => 'utf8'),
		'SpeciesCommon' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 128, 'collate' => 'utf8_unicode_ci', 'comment' => 'Species common name', 'charset' => 'utf8'),
		'FormRank' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 3, 'unsigned' => true, 'comment' => 'Number system determining order species should appear on data entry form'),
		'TaxonRank' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 5, 'unsigned' => true, 'comment' => 'Number system putting species list in taxonomic order'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'SpeciesID', 'unique' => 1)
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
			'SpeciesID' => 'Lorem ip',
			'FamilySci' => 'Lorem ipsum dolor sit amet',
			'FamilyCommon' => 'Lorem ipsum dolor sit amet',
			'Genus' => 'Lorem ipsum dolor sit amet',
			'SpeciesSci' => 'Lorem ipsum dolor sit amet',
			'SpeciesCommon' => 'Lorem ipsum dolor sit amet',
			'FormRank' => 1,
			'TaxonRank' => 1
		),
	);

}
