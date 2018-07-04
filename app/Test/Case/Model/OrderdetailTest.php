<?php
App::uses('Orderdetail', 'Model');

/**
 * Orderdetail Test Case
 */
class OrderdetailTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.orderdetail',
		'app.order',
		'app.product',
		'app.newproduct',
		'app.product_special'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Orderdetail = ClassRegistry::init('Orderdetail');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Orderdetail);

		parent::tearDown();
	}

}
