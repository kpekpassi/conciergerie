$(document).ready(function () {

	$('.stathead a').click(function(){
        $("i",this).toggleClass('icon');
        $(this).toggleClass('text-bou-claire');
	});

        $('.ab button').click(function(){
        $(this).toggleClass('bg-orange');
        });

        $('.cross1').click(function(){
        $(".ab1 button").addClass('bg-bou-claire');
        $(".ab1 button").removeClass('bg-orange');
        });

        $('.cross2').click(function(){
        $(".ab2 button").addClass('bg-bou-claire');
        $(".ab2 button").removeClass('bg-orange');
        });

        $('.cross3').click(function(){
        $(".ab3 button").addClass('bg-bou-claire');
        $(".ab3 button").removeClass('bg-orange');
        });

        $('.cross4').click(function(){
        $(".ab4 button").addClass('bg-bou-claire');
        $(".ab4 button").removeClass('bg-orange');
        });

        $('.cross5').click(function(){
        $(".ab5 button").addClass('bg-bou-claire');
        $(".ab5 button").removeClass('bg-orange');
        });

});