<?php
App::uses('State', 'Model');

/**
 * State Test Case
 *
 */
class StateTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.state',
		'app.city',
		'app.project_location',
		'app.project',
		'app.project_status',
		'app.user',
		'app.project_comment',
		'app.project_image',
		'app.user_skill',
		'app.user_social_auth',
		'app.project_material',
		'app.project_skill',
		'app.project_user',
		'app.project_category'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->State = ClassRegistry::init('State');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->State);

		parent::tearDown();
	}

}
