<!-- Book a meeting -->
<fieldset id="your_challenge">	
	<h2 class="your_account sprite">Book a space</h2>	
	<div class="clearfix right_padding_more">
		<label for="xlInput">Name of Event: </label>
		<div class="input">
	  		<?php echo Form::input('nameOfEvent', '', array('class' =>'xlarge')); ?>
		</div>
	</div>
	<div class="clearfix">
		<label for="xlInput">I want to book the space for a: <span class="required">*</span></label>
		<div class="input">
	  		<?php 

	  		echo Form::select('typeOfEvent', 'none', array(
	  			
	  			'none' 	=> 'Please select type of event',
	  			'smallmeeting' => 'Small meeting ( less than 30 )',
	  			'largemeeting' => 'Large meeting ( more than 30 )',
				'filmscreening' => 'Cinema / Film screening',
				'readinggroup' => 'Reading group',

			));

			?>
		</div>		
	</div><!-- /clearfix -->
	
	<div class="clearfix right_padding_more">
		<label for="xlInput">Start Date of Event: </label>
		<div class="input">
	  		<?php echo Form::input('startDateOfEvent', '', array('class' =>'xlarge', 'placeholder' => 'dd/mm/yyyy')); ?>
	  		<?php echo Form::input('startTimeOfEvent', '', array('class' =>'xlarge')); ?>
		</div>
	</div>

	<div class="clearfix right_padding_more">
		<label for="xlInput">End Date of Event: </label>
		<div class="input">
	  		<?php echo Form::input('endDateOfEvent', '', array('class' =>'xlarge', 'placeholder' => 'dd/mm/yyyy')); ?>
	  		<?php echo Form::input('endTimeOfEvent', '', array('class' =>'xlarge')); ?>
		</div>
	</div>
				
	
	<div class="clearfix" id="tell_us">
		<label for="xlInput">Description of event: <span class="required">*</span></label>
	 	<div class="input">
			<?php echo Form::textarea('pageStory', Input::post('pageStory', isset($profile) ? strip_tags(html_entity_decode($profile->description)) : ''), array('class' =>'xlarge','rows' => 7)); ?>
			<span class="help-block orange_light">( <span id="char_left">0</span> characters remaining )</strong>
		</div>
	</div><!-- /clearfix -->

</fieldset>		

<!-- Contact details -->
<fieldset id="contact_details">
	<h2 class="new_account sprite">Publicise your event</h2>						
	<div class="clearfix">
		<label for="xlInput">Name: <span class="required">*</span></label>
		<div class="input">
	  		<?php echo Form::input('contactName','', array('class' =>'xlarge')); ?>
		</div>
	</div><!-- /clearfix -->
</fieldset>

<!-- Contact details -->
<fieldset id="contact_details">
	<h2 class="new_account sprite">Contact details</h2>						
	<div class="clearfix">
		<label for="xlInput">Name: <span class="required">*</span></label>
		<div class="input">
	  		<?php echo Form::input('contactName','', array('class' =>'xlarge')); ?>
		</div>
	</div><!-- /clearfix -->

	<div class="clearfix">
		<label for="xlInput">Group: </label>
		<div class="input">
	  		<?php echo Form::input('contactGroup', '', array('class' =>'xlarge')); ?>
		</div>	
	</div><!-- /clearfix -->

	<div class="clearfix">
		<label for="xlInput">Email: </label>
		<div class="input">
	  		<?php echo Form::input('contactEmail', '', array('class' =>'xlarge')); ?>
		</div>	
	</div><!-- /clearfix -->

	<div class="clearfix">
		<label for="xlInput">Mobile: </label>
		<div class="input">
	  		<?php echo Form::input('contactMobile', '', array('class' =>'xlarge')); ?>
		</div>	
	</div><!-- /clearfix -->

	<div class="clearfix ">
		<div class="input pull-left">
	  		<?php echo Form::checkbox('challenge60OptIn', true, null, array('class' =>'styled'));  ?>
		</div>	
		<label for="xlInput">&nbsp; I have read and accept the <a href="/book/guidelines" target="_blank">Unit East Guidelines</a></label>
	</div><!-- /clearfix -->	

	<div class="clearfix">
		<button type="submit" class="btn btn-primary">Create Account</button>
	</div><!-- /clearfix -->	
	
	
</fieldset>	

<br />