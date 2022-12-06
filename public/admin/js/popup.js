
$('.donate-popup').hide();

setTimeout(
    function(){ 

        $('.donate-popup').slideDown(1000,'linear');
        
        $('.croix-off').click(function(){
            $('.donate-popup').slideUp(500,'linear');
        });
},
    5000);