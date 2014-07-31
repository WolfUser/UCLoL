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

<<<<<<< HEAD
<<<<<<< HEAD
	public function rankedTeam() {
		$this->layout->content = View::make('community/rankedteam');
	}

	public function tryouts() {
		$this->layout->content = View::make('community/tryouts');
	}

	public function streamers() {
		$this->layout->content = View::make('community/streamers');
	}

	public function teamspeak() {
		$this->layout->content = View::make('community/teamspeak');
=======
	public function ourStaff() {
		$this->layout->content = View::make('ourStaff');
	}

	public function donations() {
		$this->layout->content = View::make('donations');
>>>>>>> origin/master
	}

=======
>>>>>>> parent of 4f5cedf... Community drop down
}