<?php
/**
 * Order Fixture
 */
class OrderFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'code' => array('type' => 'string', 'null' => false, 'default' => '0', 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'member_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false),
		'date_added' => array('type' => 'datetime', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'last_modified' => array('type' => 'datetime', 'null' => false, 'default' => '0000-00-00 00:00:00'),
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
			'code' => 'Lorem ipsum dolor sit amet',
			'member_id' => 1,
			'date_added' => '2018-07-04 09:36:12',
			'last_modified' => '2018-07-04 09:36:12'
		),
	);

}
