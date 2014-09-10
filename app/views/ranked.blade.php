@extends('layouts.master')

@section('content')

<div class="row block">
	<div class="block block-contactform_block span12">
	<div class="title-wrapper">
	    <h3 class="widget-title">COMPETITIVE REGISTRATION FORM</h3>
	    <div class="clear"></div>
	</div>
	<div class="mcontainer">
	    <!-- 
	    <form action="/rest/rankedform" id="contactForm" class="contact" method="post" novalidate="novalidate">
	        <ul class="contactform controls">
	        	<li>
	        		<p style="text-align:center;font-weight:bold;font-size:13px;"> Here you can submit your information to be considered for the UCLoL official competitive team. You must be at least Gold V to apply. </p>
	        		<p style="text-align:center;font-weight:bold;font-size:13px;"> In order for you to be properly evaluated you must go on OP.gg during/at the start of your game and hit "Open Current Game Info" then hit record. This allows anyone to view the recorded game. If you do not do this, you most likely will not be eligible to pass the first round. </p>
	        	</li>
	            <li class="input-prepend">
	                <span class="add-on"><i class="icon-user"></i></span>
	                <input type="text" name="name" placeholder="Name*" id="contactName" value="" class="required requiredField">
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
						<option value="gold" selected>Gold</option>
						<option value="platinum">Platinum</option>
						<option value="diamond">Diamond</option>
						<option value="challenger">Challenger</option>
					</select>
				</li>
	            <li class="input-prepend">
	                <span class="add-on"><i class="icon-group"></i></span>
	                <input type="text" placeholder="Favorite Champions*" name="favchamp" id="ign" value="" class="required">
	            </li>
				 <li class="input-prepend">
	            	<span class="add-on"><i class="icon-trophy"></i></span>
	            	<select name="position" style="padding:2%; width:92%;height:100%;" class="required">
						<option value="top" selected>Top</option>
						<option value="mid">Mid</option>
						<option value="jungle">Jungle</option>
						<option value="adcarry">AD Carry</option>
						<option value="support">Support</option>
					</select>
				</li>
	            <li>
	                <input type="submit" class="button-green button-small" value="Submit">
	            </li>
	        </ul>
	        <input type="hidden" name="submitted" id="submitted" value="true">
	    </form>
	    -->
	    <div style="text-align:center;font-weight:bold;font-size:12px;margin-top:30px;">
	    	I want to preface this by thanking everyone who applied! It was extremely hard to narrow down the list as everyone who applied showed a lot of skill! 
	    </div>
	    <div style="font-size:12px;margin-top:15px;">
	    	<br>
	    	For Top:
	    	<br>
	    	<ul>
	    		<li>Rafael Heck</li>
	    		<li>Bryan Hoskins</li>
	    		<li>Clayton Hoover</li>
	    		<li>Cody Ernst</li>
	    		<li>Matthew Postell</li>
	    	</ul>
	    	<br>
	    	For Support:
	    	<ul>
	    		<li>Jon Macbeth</li>
	    		<li>Logan Herbers</li>
	    		<li>Cody Saliba</li>
	    		<li>Kainon Loebker</li>
	    		<li>Thomas Sohn</li>
	    	</ul>
	    	<br>
	    	For Mid:
	    	<ul>
	    		<li>Nicholas Gramke</li>
	    		<li>Jeremy Ballard</li>
	    		<li>Nghia Le</li>
	    		<li>Grant Courts</li>
	    		<li>Christopher Broderick</li>
	    	</ul>
	    	<br>
	    	For Jungle:
	    	<ul>
	    		<li>Alex Glahn</li>
	    		<li>Andrew Wait</li>
	    		<li>Jake Courts</li>
	    		<li>Ryan Meyer</li>
	    		<li>Joseph Lazarte</li>
	    	</ul>
	    	<br>
	    	For ADC:
	    	<ul>
	    		<li>Ryan Finley</li>
	    		<li>Daniel Prather</li>
	    		<li>Matthew Hein</li>
	    		<li>Dean Morris</li>
	    		<li>Shaochu Liu</li>
	    	</ul>
	    </div>
	</div>
	</div>
</div>
@stop
