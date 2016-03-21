<?php

class TDichtelj extends TobjetStd{

	function __construct()
	{

 		$this->set_table(MAIN_DB_PREFIX.'like');
 	  
-		$this->add_champs('fk_user1,fk_user2',array('type'=>'char', 'index'=>true));
 		$this->add_champs('affinité','type=boolean;');
}