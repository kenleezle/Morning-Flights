<?php
App::uses('Mfhour', 'Model');

/**
 * Mfhour Test Case
 *
 */
class MfhourTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.mfhour'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Mfhour = ClassRegistry::init('Mfhour');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Mfhour);

		parent::tearDown();
	}

}
