<?php
App::uses('EventsTheme', 'Model');

/**
 * EventsTheme Test Case
 *
 */
class EventsThemeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.events_theme',
		'app.events',
		'app.themes'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EventsTheme = ClassRegistry::init('EventsTheme');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EventsTheme);

		parent::tearDown();
	}

}
