<?php
App::uses('ProjectMaterial', 'Model');

/**
 * ProjectMaterial Test Case
 *
 */
class ProjectMaterialTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.project_material',
		'app.project'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProjectMaterial = ClassRegistry::init('ProjectMaterial');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProjectMaterial);

		parent::tearDown();
	}

}
