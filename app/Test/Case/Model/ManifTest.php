<?php
App::uses('Manif', 'Model');

/**
 * Manif Test Case
 *
 */
class ManifTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.manif'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Manif = ClassRegistry::init('Manif');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Manif);

		parent::tearDown();
	}

}
