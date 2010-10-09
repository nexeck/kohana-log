<?php

Route::set('log', 'log(/<date>)', array(
		'date' => '\d{4}/\d{2}/\d{2}',
	))
	->defaults(array(
		'controller' => 'log',
		'action' => 'view',
	));
