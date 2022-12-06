
$( document ).ready(function() {
    $('.lang1').removeClass('trans');
});

$(".button-trans").html('<i class="fal fa-arrow-to-bottom"></i>&nbsp;&nbsp;&nbsp;DOCUMENTS');

$('.lang-s').click(function(){
    $('.langs').toggleClass('n-cache');
});

$('.lang').click(function(){
    $('.langs').toggleClass('n-cache');
});

$('.lang1').click(function(){
    $(".lang-s").html('FR');
});

$('.lang2').click(function(){
    $(".lang-s").html('EN');
});

$('.lang3').click(function(){
    $(".lang-s").html('PR');
});

$('.lang4').click(function(){
    $(".lang-s").html('AR');
});