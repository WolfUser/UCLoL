@extends('layouts.master')

@section('content')
		<div class="title-wrapper" style="margin-left:3px;">
			<h3 class="widget-title">Calendar</h3>
			<div class="clear"></div>
		</div>
		<div class="wcontainer">
			<iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=uofcincinnatilol%40gmail.com&amp;color=%230F4B38&amp;ctz=America%2FNew_York" style=" border-width:0 " width="100%" height="600" frameborder="0" scrolling="no"></iframe>
		</div>

		<style type="text/css">

			.view-cap, .view-container-border {
				background-color:transparent;
			}

		</style>
@stop