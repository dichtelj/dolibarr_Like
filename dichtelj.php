<?php

	require 'config.php';

	dol_include_once('/core/lib/user.lib.php');
	$head = user_prepare_head($object);
	dol_fiche_head($head, 'dichtelj', $title, 0, 'user');

?>
