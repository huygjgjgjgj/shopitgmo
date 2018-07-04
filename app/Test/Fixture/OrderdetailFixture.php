<?php
/**
 * Orderdetail Fixture
 */
class OrderdetailFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'order_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false),
		'product_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false),
		'quantity' => array('type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false),
		'price' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'status' => array('type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'order_id' => 1,
			'product_id' => 1,
			'quantity' => 1,
			'price' => 1,
			'status' => 1
		),
	);

}
