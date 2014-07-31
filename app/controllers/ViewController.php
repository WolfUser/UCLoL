<?php

class ViewController extends BaseController {

	protected $layout = 'layouts.master';

	public function home() {
		$this->layout->content = View::make('home');
	}

	public function announcements() {
		$this->layout->content = View::make('announcements');
	}

	public function calendar() {
		$this->layout->content = View::make('calendar');
	}

	public function ourStaff() {
		$this->layout->content = View::make('ourStaff');
	}

	public function donations() {
		$this->layout->content = View::make('donations');
	}

}