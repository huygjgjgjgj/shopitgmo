<?php
App::uses('Order', 'Model');

/**
 * Order Test Case
 */
class OrderTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.order',
		'app.member',
		'app.orderdetail',
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
		$this->Order = ClassRegistry::init('Order');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Order);

		parent::tearDown();
	}

}
