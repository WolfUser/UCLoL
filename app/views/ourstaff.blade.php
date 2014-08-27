@extends('layouts.master')

@section('content')
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
	                      <div class="pdisplay">
                          	<p style="text-align:center;color:#fff;top:80px;">{{{ $member->description }}}</p>
                          </div>
	                   	  <img style="height:265px;width:265px;" src="{{{ $member->image }}}">
	                    </div>
	                    <div class="ptitle">
	                      <h4>
	                        <a rel="bookmark" title="{{{ $member->name }}}">{{{ $member->name }}}</a>
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