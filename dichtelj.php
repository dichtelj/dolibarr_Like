<?php

	require 'config.php';
	dol_include_once('/core/lib/user.lib.php');
	dol_include_once('/user/class/user.class.php');

	$fk_user = GETPOST('id');

	$object = new User($db);
	$object->fetch($fk_user);

	$action = GETPOST('action');

	switch ($action)
	{
		case 'value':
			break;

		default:
			_card($object);
			break;
	}

function _card(&$object)
{
	global $conf,$db,$user,$langs,$form;
	$head = user_prepare_head($object);
	llxHeader();

	dol_fiche_head($head, 'dichtelj', $title, 0, 'user');

	//echo $form->select_users($selected,$htmlname=,$show_empty,$exclude,$disabled,$include,$enableonly,$force_entity);

	dol_fiche_end();

	llxFooter();
}
?>
