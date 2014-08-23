<?php

class RestController extends BaseController {

	public function postRankedform() {

		$form = new Registration;
		$form->name = Input::get('name');
		$form->email = Input::get('email');
		$form->ign = Input::get('ign');
		$form->rank = Input::get('rank');
		$form->fav_champ = Input::get('favchamp');
		$form->position = Input::get('position');
		$form->opgg_link = "na.op.gg/summoner/userName=" . Input::get('ign');
		$form->save();

		Session::flash('success', 'Successfully submitted your application for the ranked team!');
		return Redirect::to('/');
	}

}