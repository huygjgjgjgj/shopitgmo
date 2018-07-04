<?php
App::uses('Newproduct', 'Model');

/**
 * Newproduct Test Case
 */
class NewproductTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.newproduct',
		'app.product',
		'app.orderdetail',
		'app.product_special'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Newproduct = ClassRegistry::init('Newproduct');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Newproduct);

		parent::tearDown();
	}

}
