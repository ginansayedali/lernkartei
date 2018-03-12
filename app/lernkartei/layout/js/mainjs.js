$(function () {

	'use strict';

	$('.card-js span').click(function () {

		$(this).addClass('selected').siblings().removeClass('selected');

		$('.show-answer').removeClass("hidden-class");

		$(this).hide();


	});

	// Trigger The Selectboxit

	$("select").selectBoxIt({

		autoWidth: false

	});


	// Hide Placeholder On Form Focus

	$('[placeholder]').focus(function () {

		$(this).attr('data-text', $(this).attr('placeholder'));

		$(this).attr('placeholder', '');

	}).blur(function () {

		$(this).attr('placeholder', $(this).attr('data-text'));

	});

	// Add Asterisk On Required Field

	$('input').each(function () {

		if ($(this).attr('required') === 'required') {

			$(this).after('<span class="asterisk">*</span>');

		}

	});

});
