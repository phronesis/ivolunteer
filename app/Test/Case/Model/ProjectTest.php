<?php
App::uses('Project', 'Model');

/**
 * Project Test Case
 *
 */
class ProjectTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.project',
		'app.project_status',
		'app.user',
		'app.project_comment',
		'app.project_image',
		'app.project_location',
		'app.city',
		'app.state',
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
		$this->Project = ClassRegistry::init('Project');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Project);

		parent::tearDown();
	}

}
