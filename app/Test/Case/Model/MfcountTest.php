<?php
App::uses('Mfcount', 'Model');

/**
 * Mfcount Test Case
 *
 */
class MfcountTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.mfcount'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Mfcount = ClassRegistry::init('Mfcount');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Mfcount);

		parent::tearDown();
	}

}
