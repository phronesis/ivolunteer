<?php
App::uses('ProjectStatus', 'Model');

/**
 * ProjectStatus Test Case
 *
 */
class ProjectStatusTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.project_status',
		'app.project'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProjectStatus = ClassRegistry::init('ProjectStatus');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProjectStatus);

		parent::tearDown();
	}

}
