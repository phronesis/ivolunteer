<?php
App::uses('ProjectComment', 'Model');

/**
 * ProjectComment Test Case
 *
 */
class ProjectCommentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.project_comment',
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
		$this->ProjectComment = ClassRegistry::init('ProjectComment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProjectComment);

		parent::tearDown();
	}

}
