<?php
App::uses('Mfcountdate', 'Model');

/**
 * Mfcountdate Test Case
 *
 */
class MfcountdateTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.mfcountdate'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Mfcountdate = ClassRegistry::init('Mfcountdate');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Mfcountdate);

		parent::tearDown();
	}

}
