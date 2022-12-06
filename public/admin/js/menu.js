
/*===================================================================
                            Script du Menu 
===================================================================*/

$('.menuCroix').click(function(){
    $('.nav21 .subProgramme').removeClass('cache');
    $('.nav21 .subEngage').removeClass('cache');
    $('.nav11 .subMedia').removeClass('cache');
    $('.nav11 .subDonate').removeClass('cache');
    $('.langs').addClass('n-cache');
});


$('.simple-link').click(function(){
    $('.nav21 .subProgramme').removeClass('cache');
    $('.nav21 .subEngage').removeClass('cache');
    $('.nav11 .subMedia').removeClass('cache');
    $('.nav11 .subDonate').removeClass('cache');
});


$('.nav21 .programme').on('click',function(){
        $('.nav21 .subProgramme').toggleClass('cache');
        $('.nav21 .subEngage').removeClass('cache');
        $('.nav11 .subMedia').removeClass('cache');
        $('.nav11 .subDonate').removeClass('cache');
    }
);


$('.nav21 .engage').click(
    function(){ 
        $('.nav21 .subProgramme').removeClass('cache');
        $('.nav21 .subEngage').toggleClass('cache');
        $('.nav11 .subMedia').removeClass('cache');
        $('.nav11 .subDonate').removeClass('cache');
    }
);


$('.nav11 .media').click(
    function(){
        $('.nav21 .subProgramme').removeClass('cache');
        $('.nav21 .subEngage').removeClass('cache');
        $('.nav11 .subMedia').toggleClass('cache');
        $('.nav11 .subDonate').removeClass('cache');
    }
);


$('.nav11 .donate').click(
    function(){
        $('.nav21 .subProgramme').removeClass('cache');
        $('.nav21 .subEngage').removeClass('cache');
        $('.nav11 .subMedia').removeClass('cache');
        $('.nav11 .subDonate').toggleClass('cache');
    }
);

// ===================================================
//                    REDIRECTION             
// ===================================================

$('.nav21 .programme').on('dblclick',function(){
    // WindowClient.navigate("{{route('programme.programme')}}");
    location.href ="/programme/hair"

}
);


$('.nav21 .engage').on('dblclick',function(){
    // WindowClient.navigate("{{route('programme.programme')}}");
    location.href ="/engagement"

}
);


$('.nav11 .media').on('dblclick',function(){
    // WindowClient.navigate("{{route('programme.programme')}}");
    location.href ="/media"

}
);


$('.nav11 .donate').on('dblclick',function(){
    // WindowClient.navigate("{{route('programme.programme')}}");
    location.href ="/donate"

}
);

$('.enfant').on('click',function(){
    location.href ="/faits/enfants"
}
);

$('.ado').on('click',function(){
    location.href ="/faits/adolescent"
}
);

$('.femme').on('click',function(){
    location.href ="/faits/femme"
}
);

$('.homme').on('click',function(){
    location.href ="/faits/homme"
}
);

$('.age').on('click',function(){
    location.href ="/faits/les-personnes-âgées"
}

);
$('.enceinte').on('click',function(){
    location.href ="/faits/femme-enceinte"
}
);

$('.lgbt').on('click',function(){
    location.href ="/faits/personne-lgbt"
}
);

$('.refuge').on('click',function(){
    location.href ="/faits/refugie"
}
);

$('.parent').on('click',function(){
    location.href ="/faits/jeunes-parents"
}
);



