<?php
App::uses('Ncdcweather', 'Model');

/**
 * Ncdcweather Test Case
 *
 */
class NcdcweatherTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ncdcweather'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Ncdcweather = ClassRegistry::init('Ncdcweather');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ncdcweather);

		parent::tearDown();
	}

}
