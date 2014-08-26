@extends('layouts.master')

@section('content')
	<p>
	<b>President -</b> Chris Postell</br>
	<b>Vice President -</b> Juanita Dickhaus </br>
	<b>Treasurer -</b> Richard Baxter</br>
	<b>Event Planner -</b> Terrance Webb</br>
	<b>Media and Website Organizer -</b> Ryan Finley</br>
	<b>Ranked Teams Coordinator -</b> Jon Deibel</br>
	<b>Assistant Social Event Planner -</b> Jon Wood</br>
	</p>

	<div class="template-wrapper">
		<div class="block block-portfolio_block span12 first cf">
			<div class="portfolio-block block">
				<div class="title-wrapper">
					<h3 class="widget-title">Our Staff</h3>
					<div class="clear"></div>
				</div>
				<ul id="list" class="portfolio-grid span12">
					@foreach($members as $member)
	                  <li data-id="id-0" class="span3 Adve Fant Onli">
	                    <div class="pimage">
	                      <div class="pbg"></div>
	                   	  <img src="{{{ $member->image }}}">
	                    </div>
	                    <div class="ptitle">
	                      <h4>
	                        <a rel="bookmark" title="{{{ $member->name }}}">{{{ $member->name }}}}</a>
	                      </h4><span>{{{ $member->title }}}</span>
	                    </div>
	                  </li>
                  	@endforeach
                </ul>

				<div class="clear"></div>
			</div>
			<!-- portfolio-block block -->
		</div>
		<div class="clear"></div>
	</div>
@stop