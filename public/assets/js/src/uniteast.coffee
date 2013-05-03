

$ ->

	# ----------------------------------
	# Date Pickers
	# ----------------------------------
	# $( "#form_dateOfEvent" ).datepicker()
	# $( "#form_dateOfEvent" ).datepicker( "option", "showAnim", "slide" )
	# $( "#form_dateOfEvent" ).datepicker( "option", "changeYear", true )
	# $( "#form_dateOfEvent" ).datepicker( "option", "yearRange", "1900:2013" );

	$( "#form_startDateOfEvent" ).datetimepicker({
		altField: "#form_startTimeOfEvent"
	});

	$( "#form_endDateOfEvent" ).datetimepicker({
		altField: "#form_endTimeOfEvent"
	});