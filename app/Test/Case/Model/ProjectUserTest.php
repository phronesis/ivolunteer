<?php
App::uses('ProjectUser', 'Model');

/**
 * ProjectUser Test Case
 *
 */
class ProjectUserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.project_user',
		'app.project',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProjectUser = ClassRegistry::init('ProjectUser');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProjectUser);

		parent::tearDown();
	}

}
