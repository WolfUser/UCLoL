<?php

class ViewController extends BaseController {

	protected $layout = 'layouts.master';

	public function home() {

		$news = News::orderBy('id', "DESC")->get();

		$this->layout->content = View::make('home')->with("news", $news);
	}

	public function announcements() {
		$this->layout->content = View::make('announcements');
	}

	public function calendar() {
		$this->layout->content = View::make('calendar');
	}

	public function ranked() {
		$this->layout->content = View::make('ranked');
	}

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
	}

	public function ourStaff() {
		$staff = Staff::orderBy('id', "ASC")->get();

		$this->layout->content = View::make('ourstaff')->with("members", $staff);
	}

	public function donations() {
		$this->layout->content = View::make('donations');
	}

	public function gameDay() {
		$this->layout->content = View::make('gameday');
	}
}