$(document).ready(function(){
    $(".lorem").hover(function(){
        $(".lorem").addClass('resaltar');

    });

    $(".lorem").hover(function(){
        $(".lorem").removeClass('resaltar');

    });

    $(".lorem").click(function(){
        $(".caja").css("color", "green").slideUp(2000).slideDown(2000);
    });

    $(".estilo").hover(function(){
        $(".estilo").removeClass('resaltar');

    });

    $(".estilo").hover(function(){
        $(".estilo").removeClass('resaltar');

    });

});