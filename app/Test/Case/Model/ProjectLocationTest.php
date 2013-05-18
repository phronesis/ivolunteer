<?php
App::uses('ProjectLocation', 'Model');

/**
 * ProjectLocation Test Case
 *
 */
class ProjectLocationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.project_location',
		'app.project',
		'app.city',
		'app.state'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProjectLocation = ClassRegistry::init('ProjectLocation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProjectLocation);

		parent::tearDown();
	}

}
