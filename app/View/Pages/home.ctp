<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 */

if (!Configure::read('debug')):
	throw new NotFoundException();
endif;

App::uses('Debugger', 'Utility');
?>

<div>
	<ul>

		<li><a href="mfhours">mfhours</a></li>
		<li><a href="mfcountdates">mfcountdates</a></li>

		<li><a href="mfcounters">mfcounters</a></li>
		<li><a href="mfcountdates">mfcountdates</a></li>

		<li><a href="mfcountdates">mfcountdates</a></li>
		<li><a href="mfcountdates">mfcountdates</a></li>
		
	</ul>
</div>
