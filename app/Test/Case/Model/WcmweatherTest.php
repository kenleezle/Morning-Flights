<?php
App::uses('Wcmweather', 'Model');

/**
 * Wcmweather Test Case
 *
 */
class WcmweatherTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.wcmweather'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Wcmweather = ClassRegistry::init('Wcmweather');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Wcmweather);

		parent::tearDown();
	}

}
