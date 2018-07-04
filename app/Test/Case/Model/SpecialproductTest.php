<?php
App::uses('Specialproduct', 'Model');

/**
 * Specialproduct Test Case
 */
class SpecialproductTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.specialproduct',
		'app.product',
		'app.newproduct',
		'app.orderdetail',
		'app.order',
		'app.member',
		'app.product_special'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Specialproduct = ClassRegistry::init('Specialproduct');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Specialproduct);

		parent::tearDown();
	}

}
