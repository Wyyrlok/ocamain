<?php
App::uses('Asso', 'Model');

/**
 * Asso Test Case
 *
 */
class AssoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.asso',
		'app.account',
		'app.group',
		'app.event'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Asso = ClassRegistry::init('Asso');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Asso);

		parent::tearDown();
	}

}
