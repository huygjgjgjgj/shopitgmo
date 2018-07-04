<?php
App::uses('Contentcategory', 'Model');

/**
 * Contentcategory Test Case
 */
class ContentcategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.contentcategory'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Contentcategory = ClassRegistry::init('Contentcategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Contentcategory);

		parent::tearDown();
	}

}
