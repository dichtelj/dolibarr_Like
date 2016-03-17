<?php

	require 'config.php';
	dol_include_once('/core/lib/user.lib.php');
	dol_include_once('/user/class/user.class.php');

	$fk_user = GETPOST('id');

	$object = new User($db);
	$object->fetch($fk_user);

	$head = user_prepare_head($object);
	llxHeader();

	dol_fiche_head($head, 'dichtelj', $title, 0, 'user');

	dol_fiche_end();

	llxFooter();
?>
