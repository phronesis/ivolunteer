<?php
App::uses('UserSocialAuth', 'User.Model');

/**
 * UserSocialAuth Test Case
 *
 */
class UserSocialAuthTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.user.user_social_auth',
		'plugin.user.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UserSocialAuth = ClassRegistry::init('User.UserSocialAuth');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UserSocialAuth);

		parent::tearDown();
	}

}
