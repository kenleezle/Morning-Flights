<?php
App::uses('Mfcounter', 'Model');

/**
 * Mfcounter Test Case
 *
 */
class MfcounterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.mfcounter'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Mfcounter = ClassRegistry::init('Mfcounter');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Mfcounter);

		parent::tearDown();
	}

}
