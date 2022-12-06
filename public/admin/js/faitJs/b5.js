//b6
$(document).ready(function(){
    var wi = screen.width
    if (wi>1200){
        $('.b5 .es').click(function(){

            $('.b5 .cross1').css({
                'visibility':'visible'
            });

            $('.b5 #p-cache').css({
                'visibility':'visible',
                'height':'auto'
            });

            $('.b5 .es').hide();

            $('.b5 .ap').css({
                'visibility':'visible',
                'height':'auto'
            });

            // effet sur b2
            $('.b2').removeClass('b2-e');

            $('.b4').removeClass('b4-r2');

            $('.b4').removeClass('b4-r');

            $('.b5').removeClass('b5-r');

            $('.b3').removeClass('b3-r');

            $('.b2 .cross1').css({
                'visibility':'hidden'
            });

            $('.b2 #p-cache').css({
                'visibility':'hidden'
            });

            $('.b2 #p-cache').css({
                'height':'0px'
            });

            $('.b2 .ap').css({
                'visibility':'hidden',
            });

            $('.b2 .es').show();
            // fin effet sur b2

            // effet sur b3
            $('.b3').removeClass('b3-e');

            $('.b2').removeClass('b2-r');

            $('.b3 .cross1').css({
                'visibility':'hidden'
            });

            $('.b3 #p-cache').css({
                'visibility':'hidden'
            });

            $('.b3 #p-cache').css({
                'height':'0px'
            });

            $('.b3 .ap').css({
                'visibility':'hidden',
            });

            $('.b3 .es').show();
            // fin effet sur b3

            // effet sur b1
            $('.b1').removeClass('b1-e');

            $('.b4').removeClass('b4-r');

            $('.b5').removeClass('b5-r');

            $('.b1 .cross1').css({
                'visibility':'hidden'
            });

            $('.b1 #p-cache').css({
                'visibility':'hidden'
            });

            $('.b1 #p-cache').css({
                'height':'0px'
            });

            $('.b1 .ap').css({
                'visibility':'hidden',
            });

            $('.b1 .es').show();

            // $('.b1 .buttons-bas-b1').css({
            //     'margin-top':'100px',
            // });
            // fin effet sur b1


            // effet sur b6
            $('.b6').removeClass('b6-e');

            $('.b5').removeClass('b5-r2');

            $('.b6 .cross1').css({
                'visibility':'hidden'
            });

            $('.b6 #p-cache').css({
                'visibility':'hidden'
            });

            $('.b6 #p-cache').css({
                'height':'0px'
            });

            $('.b6 .ap').css({
                'visibility':'hidden',
            });

            $('.b6 .es').show();
            // fin effet sur b6


            $('.b8').removeClass('b8-e');

            $('.b8 .cross1').css({
                'visibility':'hidden'
            });

            $('.b8 #p-cache').css({
                'visibility':'hidden'
            });

            $('.b8 #p-cache').css({
                'height':'0px'
            });

            $('.b8 .ap').css({
                'visibility':'hidden',
            });

            $('.b8 .es').show();


            $('.b9').removeClass('b9-e');

            $('.b9 .cross1').css({
                'visibility':'hidden'
            });

            $('.b9 #p-cache').css({
                'visibility':'hidden'
            });

            $('.b9 #p-cache').css({
                'height':'0px'
            });

            $('.b9 .ap').css({
                'visibility':'hidden',
            });

            $('.b9 .es').show();



            $('.b7').removeClass('b7-e');

            $('.b10').removeClass('b10-r');

            $('.b7 .cross1').css({
                'visibility':'hidden'
            });

            $('.b7 #p-cache').css({
                'visibility':'hidden'
            });

            $('.b7 #p-cache').css({
                'height':'0px'
            });

            $('.b7 .ap').css({
                'visibility':'hidden',
            });

            $('.b7 .es').show();




            $('.b4 .cross1').css({
                'visibility':'hidden'
            });

            $('.b4 #p-cache').css({
                'visibility':'hidden'
            });

            $('.b4 #p-cache').css({
                'height':'0px'
            });

            $('.b4 .ap').css({
                'visibility':'hidden',
            });

            $('.b4 .es').show();




            $('.b10').removeClass('b10-e');

            $('.b5').removeClass('b5-r');

            $('.b10 .cross1').css({
                'visibility':'hidden'
            });

            $('.b10 #p-cache').css({
                'visibility':'hidden'
            });

            $('.b10 #p-cache').css({
                'height':'0px'
            });

            $('.b10 .ap').css({
                'visibility':'hidden',
            });

            $('.b10 .es').show();


        });


        $('.b5 .cross1').click(function(){
            $('.b5 .cross1').css({
                'visibility':'hidden'
            });

            $('.b5 #p-cache').css({
                'visibility':'hidden'
            });

            $('.b5 #p-cache').css({
                'height':'0px'
            });

            $('.b5 .ap').css({
                'visibility':'hidden',
            });

            $('.b5 .es').show();

        });
    }

    var wi = screen.width
    if (wi<=1200){
        $('.b5 .es').click(function(){
            // b5
            $('.b5 .cross1').css({
                'visibility':'visible'
            });

            $('.b5 #p-cache').css({
                'visibility':'visible',
                'height':'auto'
            });

            $('.b5 .es').hide();

            $('.b5 .ap').css({
                'visibility':'visible',
                'height':'auto'
            });
            // b5 end

            // b1
            $('.b1').removeClass('b1-e');

            $('.b2').removeClass('b2-r');

            $('.b3').removeClass('b3-r1');

            $('.b1 .cross1').css({
                'visibility':'hidden'
            });

            $('.b1 #p-cache').css({
                'visibility':'hidden'
            });

            $('.b1 #p-cache').css({
                'height':'0px'
            });

            $('.b1 .ap').css({
                'visibility':'hidden',
            });

            $('.b1 .es').show();

            // $('.b1 .buttons-bas-b1').css({
            //     'margin-top':'100px',
            // });
            // b1 end

            // b2
            $('.b2 .cross1').css({
                'visibility':'hidden'
            });

            $('.b2 #p-cache').css({
                'visibility':'hidden'
            });

            $('.b2 #p-cache').css({
                'height':'0px'
            });

            $('.b2 .ap').css({
                'visibility':'hidden',
            });

            $('.b2 .es').show();
            // b2 end

            // b3
            $('.b3 .cross1').css({
                'visibility':'hidden'
            });

            $('.b3 #p-cache').css({
                'visibility':'hidden'
            });

            $('.b3 #p-cache').css({
                'height':'0px'
            });

            $('.b3 .ap').css({
                'visibility':'hidden',
            });

            $('.b3 .es').show();
            // b3 end


            // b4
            $('.b4 .cross1').css({
                'visibility':'hidden'
            });

            $('.b4 #p-cache').css({
                'visibility':'hidden'
            });

            $('.b4 #p-cache').css({
                'height':'0px'
            });

            $('.b4 .ap').css({
                'visibility':'hidden',
            });

            $('.b4 .es').show();
            // b4 end

            // b6
            $('.b6').removeClass('b6-e1');

            $('.b9').removeClass('b9-r');
            
            $('.b7').removeClass('b7-r');

            $('.b8').removeClass('b8-r');

            $('.b6 .cross1').css({
                'visibility':'hidden'
            });

            $('.b6 #p-cache').css({
                'visibility':'hidden'
            });

            $('.b6 #p-cache').css({
                'height':'0px'
            });

            $('.b6 .ap').css({
                'visibility':'hidden',
            });

            $('.b6 .es').show();

            // $('.b6 .buttons-bas-b2').css({
            //     'margin-top':'200px',
            // });
            // b6 end

            // b7
            $('.b7 .cross1').css({
                'visibility':'hidden'
            });

            $('.b7 #p-cache').css({
                'visibility':'hidden'
            });

            $('.b7 #p-cache').css({
                'height':'0px'
            });

            $('.b7 .ap').css({
                'visibility':'hidden',
            });

            $('.b7 .es').show();
            // b7 end

            // b8
            $('.b8 .cross1').css({
                'visibility':'hidden'
            });

            $('.b8 #p-cache').css({
                'visibility':'hidden'
            });

            $('.b8 #p-cache').css({
                'height':'0px'
            });

            $('.b8 .ap').css({
                'visibility':'hidden',
            });

            $('.b8 .es').show();
            // b8 end

            // b9
            $('.b9 .cross1').css({
                'visibility':'hidden'
            });

            $('.b9 #p-cache').css({
                'visibility':'hidden'
            });

            $('.b9 #p-cache').css({
                'height':'0px'
            });

            $('.b9 .ap').css({
                'visibility':'hidden',
            });

            $('.b9 .es').show();
            // b9 end

            // b10
            $('.b10 .cross1').css({
                'visibility':'hidden'
            });

            $('.b10 #p-cache').css({
                'visibility':'hidden'
            });

            $('.b10 #p-cache').css({
                'height':'0px'
            });

            $('.b10 .ap').css({
                'visibility':'hidden',
            });

            $('.b10 .es').show();
            // b10 end
        });

        $('.b5 .cross1').click(function(){
            // b5
            $('.b5 .cross1').css({
                'visibility':'hidden'
            });

            $('.b5 #p-cache').css({
                'visibility':'hidden'
            });

            $('.b5 #p-cache').css({
                'height':'0px'
            });

            $('.b5 .ap').css({
                'visibility':'hidden',
            });

            $('.b5 .es').show();
            // b5 end

        });
    }

    $(window).resize(function() {
        var wi = $(window).width();
        if (wi>1200){
            $('.b5 .es').click(function(){
    
                $('.b5 .cross1').css({
                    'visibility':'visible'
                });
    
                $('.b5 #p-cache').css({
                    'visibility':'visible',
                    'height':'auto'
                });
    
                $('.b5 .es').hide();
    
                $('.b5 .ap').css({
                    'visibility':'visible',
                    'height':'auto'
                });
    
                // effet sur b2
                $('.b2').removeClass('b2-e');
    
                $('.b4').removeClass('b4-r2');
    
                $('.b4').removeClass('b4-r');
    
                $('.b5').removeClass('b5-r');
    
                $('.b3').removeClass('b3-r');
    
                $('.b2 .cross1').css({
                    'visibility':'hidden'
                });
    
                $('.b2 #p-cache').css({
                    'visibility':'hidden'
                });
    
                $('.b2 #p-cache').css({
                    'height':'0px'
                });
    
                $('.b2 .ap').css({
                    'visibility':'hidden',
                });
    
                $('.b2 .es').show();
                // fin effet sur b2
    
                // effet sur b3
                $('.b3').removeClass('b3-e');
    
                $('.b2').removeClass('b2-r');
    
                $('.b3 .cross1').css({
                    'visibility':'hidden'
                });
    
                $('.b3 #p-cache').css({
                    'visibility':'hidden'
                });
    
                $('.b3 #p-cache').css({
                    'height':'0px'
                });
    
                $('.b3 .ap').css({
                    'visibility':'hidden',
                });
    
                $('.b3 .es').show();
                // fin effet sur b3
    
                // effet sur b1
                $('.b1').removeClass('b1-e');
    
                $('.b4').removeClass('b4-r');
    
                $('.b5').removeClass('b5-r');
    
                $('.b1 .cross1').css({
                    'visibility':'hidden'
                });
    
                $('.b1 #p-cache').css({
                    'visibility':'hidden'
                });
    
                $('.b1 #p-cache').css({
                    'height':'0px'
                });
    
                $('.b1 .ap').css({
                    'visibility':'hidden',
                });
    
                $('.b1 .es').show();
    
                // $('.b1 .buttons-bas-b1').css({
                //     'margin-top':'100px',
                // });
                // fin effet sur b1
    
    
                // effet sur b6
                $('.b6').removeClass('b6-e');
    
                $('.b5').removeClass('b5-r2');
    
                $('.b6 .cross1').css({
                    'visibility':'hidden'
                });
    
                $('.b6 #p-cache').css({
                    'visibility':'hidden'
                });
    
                $('.b6 #p-cache').css({
                    'height':'0px'
                });
    
                $('.b6 .ap').css({
                    'visibility':'hidden',
                });
    
                $('.b6 .es').show();
                // fin effet sur b6
    
    
                $('.b8').removeClass('b8-e');
    
                $('.b8 .cross1').css({
                    'visibility':'hidden'
                });
    
                $('.b8 #p-cache').css({
                    'visibility':'hidden'
                });
    
                $('.b8 #p-cache').css({
                    'height':'0px'
                });
    
                $('.b8 .ap').css({
                    'visibility':'hidden',
                });
    
                $('.b8 .es').show();
    
    
                $('.b9').removeClass('b9-e');
    
                $('.b9 .cross1').css({
                    'visibility':'hidden'
                });
    
                $('.b9 #p-cache').css({
                    'visibility':'hidden'
                });
    
                $('.b9 #p-cache').css({
                    'height':'0px'
                });
    
                $('.b9 .ap').css({
                    'visibility':'hidden',
                });
    
                $('.b9 .es').show();
    
    
    
                $('.b7').removeClass('b7-e');
    
                $('.b10').removeClass('b10-r');
    
                $('.b7 .cross1').css({
                    'visibility':'hidden'
                });
    
                $('.b7 #p-cache').css({
                    'visibility':'hidden'
                });
    
                $('.b7 #p-cache').css({
                    'height':'0px'
                });
    
                $('.b7 .ap').css({
                    'visibility':'hidden',
                });
    
                $('.b7 .es').show();
    
    
    
    
                $('.b4 .cross1').css({
                    'visibility':'hidden'
                });
    
                $('.b4 #p-cache').css({
                    'visibility':'hidden'
                });
    
                $('.b4 #p-cache').css({
                    'height':'0px'
                });
    
                $('.b4 .ap').css({
                    'visibility':'hidden',
                });
    
                $('.b4 .es').show();
    
    
    
    
                $('.b10').removeClass('b10-e');
    
                $('.b5').removeClass('b5-r');
    
                $('.b10 .cross1').css({
                    'visibility':'hidden'
                });
    
                $('.b10 #p-cache').css({
                    'visibility':'hidden'
                });
    
                $('.b10 #p-cache').css({
                    'height':'0px'
                });
    
                $('.b10 .ap').css({
                    'visibility':'hidden',
                });
    
                $('.b10 .es').show();
    
    
            });
    
    
            $('.b5 .cross1').click(function(){
                $('.b5 .cross1').css({
                    'visibility':'hidden'
                });
    
                $('.b5 #p-cache').css({
                    'visibility':'hidden'
                });
    
                $('.b5 #p-cache').css({
                    'height':'0px'
                });
    
                $('.b5 .ap').css({
                    'visibility':'hidden',
                });
    
                $('.b5 .es').show();
    
            });
        }
    
        if (wi<=1200){
            $('.b5 .es').click(function(){
                // b5
                $('.b5 .cross1').css({
                    'visibility':'visible'
                });
    
                $('.b5 #p-cache').css({
                    'visibility':'visible',
                    'height':'auto'
                });
    
                $('.b5 .es').hide();
    
                $('.b5 .ap').css({
                    'visibility':'visible',
                    'height':'auto'
                });
                // b5 end
    
                // b1
                $('.b1').removeClass('b1-e');
    
                $('.b2').removeClass('b2-r');
    
                $('.b3').removeClass('b3-r1');
    
                $('.b1 .cross1').css({
                    'visibility':'hidden'
                });
    
                $('.b1 #p-cache').css({
                    'visibility':'hidden'
                });
    
                $('.b1 #p-cache').css({
                    'height':'0px'
                });
    
                $('.b1 .ap').css({
                    'visibility':'hidden',
                });
    
                $('.b1 .es').show();
    
                // $('.b1 .buttons-bas-b1').css({
                //     'margin-top':'100px',
                // });
                // b1 end
    
                // b2
                $('.b2 .cross1').css({
                    'visibility':'hidden'
                });
    
                $('.b2 #p-cache').css({
                    'visibility':'hidden'
                });
    
                $('.b2 #p-cache').css({
                    'height':'0px'
                });
    
                $('.b2 .ap').css({
                    'visibility':'hidden',
                });
    
                $('.b2 .es').show();
                // b2 end
    
                // b3
                $('.b3 .cross1').css({
                    'visibility':'hidden'
                });
    
                $('.b3 #p-cache').css({
                    'visibility':'hidden'
                });
    
                $('.b3 #p-cache').css({
                    'height':'0px'
                });
    
                $('.b3 .ap').css({
                    'visibility':'hidden',
                });
    
                $('.b3 .es').show();
                // b3 end
    
    
                // b4
                $('.b4 .cross1').css({
                    'visibility':'hidden'
                });
    
                $('.b4 #p-cache').css({
                    'visibility':'hidden'
                });
    
                $('.b4 #p-cache').css({
                    'height':'0px'
                });
    
                $('.b4 .ap').css({
                    'visibility':'hidden',
                });
    
                $('.b4 .es').show();
                // b4 end
    
                // b6
                $('.b6').removeClass('b6-e1');
    
                $('.b9').removeClass('b9-r');
                
                $('.b7').removeClass('b7-r');
    
                $('.b8').removeClass('b8-r');
    
                $('.b6 .cross1').css({
                    'visibility':'hidden'
                });
    
                $('.b6 #p-cache').css({
                    'visibility':'hidden'
                });
    
                $('.b6 #p-cache').css({
                    'height':'0px'
                });
    
                $('.b6 .ap').css({
                    'visibility':'hidden',
                });
    
                $('.b6 .es').show();
    
                // $('.b6 .buttons-bas-b2').css({
                //     'margin-top':'200px',
                // });
                // b6 end
    
                // b7
                $('.b7 .cross1').css({
                    'visibility':'hidden'
                });
    
                $('.b7 #p-cache').css({
                    'visibility':'hidden'
                });
    
                $('.b7 #p-cache').css({
                    'height':'0px'
                });
    
                $('.b7 .ap').css({
                    'visibility':'hidden',
                });
    
                $('.b7 .es').show();
                // b7 end
    
                // b8
                $('.b8 .cross1').css({
                    'visibility':'hidden'
                });
    
                $('.b8 #p-cache').css({
                    'visibility':'hidden'
                });
    
                $('.b8 #p-cache').css({
                    'height':'0px'
                });
    
                $('.b8 .ap').css({
                    'visibility':'hidden',
                });
    
                $('.b8 .es').show();
                // b8 end
    
                // b9
                $('.b9 .cross1').css({
                    'visibility':'hidden'
                });
    
                $('.b9 #p-cache').css({
                    'visibility':'hidden'
                });
    
                $('.b9 #p-cache').css({
                    'height':'0px'
                });
    
                $('.b9 .ap').css({
                    'visibility':'hidden',
                });
    
                $('.b9 .es').show();
                // b9 end
    
                // b10
                $('.b10 .cross1').css({
                    'visibility':'hidden'
                });
    
                $('.b10 #p-cache').css({
                    'visibility':'hidden'
                });
    
                $('.b10 #p-cache').css({
                    'height':'0px'
                });
    
                $('.b10 .ap').css({
                    'visibility':'hidden',
                });
    
                $('.b10 .es').show();
                // b10 end
            });
    
            $('.b5 .cross1').click(function(){
                // b5
                $('.b5 .cross1').css({
                    'visibility':'hidden'
                });
    
                $('.b5 #p-cache').css({
                    'visibility':'hidden'
                });
    
                $('.b5 #p-cache').css({
                    'height':'0px'
                });
    
                $('.b5 .ap').css({
                    'visibility':'hidden',
                });
    
                $('.b5 .es').show();
                // b5 end
    
            });
        }
    });

});