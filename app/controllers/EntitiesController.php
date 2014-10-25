<?php

class EntitiesController extends \BaseController
{
	public function updateEntity()
	{
		$name = Input::get('name');
		$type = Input::get('type');

		if(is_array($type))
		{
			if (Input::get('type') == 1) {
				# code...
			}
		}

		$entity = new Organization;
		$entity->name 			= $name;
		$entity->cliente_type 	= $cliente_type;
		$entity->ente_type 		= $ente;
		$entity->auditado_type 	= $auditado;
		$entity->creator 		= 'eduardo';
		$entity->save();

		return View::make('hello');
	}
}