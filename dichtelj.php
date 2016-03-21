<?php

	require 'config.php';
	dol_include_once('/core/lib/user.lib.php');
	dol_include_once('/user/class/user.class.php');
	dol_include_once('/dichtelj/class/dichtelj.class.php');

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

	$pdo = new TPDOdb;
	$like = new TDichtelj;
	dol_fiche_end();

	$like->fk_user1 = $object->id;
	$like->fk_user2 = 2;
	$like->save($pdo);


	llxFooter();
}
?>
