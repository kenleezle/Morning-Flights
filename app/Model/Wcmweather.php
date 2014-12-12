<?php
App::uses('AppModel', 'Model');
/**
 * Wcmweather Model
 *
 */
class Wcmweather extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'wcmweather';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'WCMID';

}
