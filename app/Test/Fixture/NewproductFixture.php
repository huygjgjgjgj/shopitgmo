<?php
/**
 * Newproduct Fixture
 */
class NewproductFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'product_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false),
		'sort' => array('type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false),
		'status' => array('type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false),
		'date_added' => array('type' => 'datetime', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'last_modified' => array('type' => 'datetime', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'lang' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 5, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
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
			'product_id' => 1,
			'sort' => 1,
			'status' => 1,
			'date_added' => '2018-07-04 09:36:01',
			'last_modified' => '2018-07-04 09:36:01',
			'lang' => 'Lor'
		),
	);

}
