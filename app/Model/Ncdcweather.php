<?php
App::uses('AppModel', 'Model');
/**
 * Ncdcweather Model
 *
 */
class Ncdcweather extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'ncdcweather';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'NCDCID';

}
