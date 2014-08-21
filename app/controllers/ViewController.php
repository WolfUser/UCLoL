<?php

class ViewController extends BaseController {

	protected $layout = 'layouts.master';

	public function home() {

		$news = News::all();

		$this->layout->content = View::make('home')->with("news", $news);
	}

	public function announcements() {
		$this->layout->content = View::make('announcements');
	}

	public function calendar() {
		$this->layout->content = View::make('calendar');
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
		$this->layout->content = View::make('ourstaff');
	}

	public function donations() {
		$this->layout->content = View::make('donations');
	}
}