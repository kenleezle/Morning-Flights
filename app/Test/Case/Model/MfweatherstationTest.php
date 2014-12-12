<?php
App::uses('Mfweatherstation', 'Model');

/**
 * Mfweatherstation Test Case
 *
 */
class MfweatherstationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.mfweatherstation'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Mfweatherstation = ClassRegistry::init('Mfweatherstation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Mfweatherstation);

		parent::tearDown();
	}

}
