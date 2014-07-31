<?php

class ViewController extends BaseController {

	protected $layout = 'layouts.master';

	public function home() {
		$this->layout->content = View::make('home');
	}

	public function announcements() {
		$this->layout->content = View::make('announcements');
	}

}