@extends('layouts.master')

@section('content')

<div class="row block">
	<div class="block block-contactform_block span12">
	<div class="title-wrapper">
	    <h3 class="widget-title">COMPETITIVE REGISTRATION FORM</h3>
	    <div class="clear"></div>
	</div>
	<div class="mcontainer">
	    <form action="/rest/rankedform" id="contactForm" class="contact" method="post" novalidate="novalidate">
	        <ul class="contactform controls">
	        	<li>
	        		<p style="text-align:center;font-weight:bold;font-size:13px;"> Here you can submit your information to be considered for the UCLoL official competitive team. You must be at least Gold V to apply. </p>
	        	</li>
	            <li class="input-prepend">
	                <span class="add-on"><i class="icon-user"></i></span>
	                <input type="text" name="contactName" placeholder="Name*" id="contactName" value="" class="required requiredField">
	            </li>
	            <li class="input-prepend">
	                <span class="add-on"><i class="icon-envelope"></i></span>
	                <input type="text" placeholder="Email*" name="email" id="email" value="" class="required requiredField email">
	            </li>
	            <li class="input-prepend">
	                <span class="add-on"><i class="icon-group"></i></span>
	                <input type="text" placeholder="In Game Name*" name="ign" id="ign" value="" class="required">
	            </li>
	            <li class="input-prepend">
	            	<span class="add-on"><i class="icon-trophy"></i></span>
	            	<select name="rank" style="padding:2%; width:92%;height:100%;" class="required">
						<option value="gold">Gold</option>
						<option value="platinum">Platinum</option>
						<option value="diamond">Diamond</option>
						<option value="challenger">Challenger</option>
					</select>
				</li>
	            <li>
	                <input type="submit" class="button-green button-small" value="Submit">
	            </li>
	        </ul>
	        <input type="hidden" name="submitted" id="submitted" value="true">
	    </form>
	</div>
	</div>
</div>
@stop