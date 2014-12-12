<?php
App::uses('Mfspecy', 'Model');

/**
 * Mfspecy Test Case
 *
 */
class MfspecyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.mfspecy'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Mfspecy = ClassRegistry::init('Mfspecy');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Mfspecy);

		parent::tearDown();
	}

}
