

$(function(){

    $('.asistentesHeader').click(function() {
        if(!$(this).hasClass('activo')){
            $('.asistentesHeader').addClass('activo');
            $('.invitados').fadeOut(1000).addClass('hidden');
            $('.asistentes').removeClass('hidden').fadeIn(1000);
            $('.invitadosHeader').removeClass('activo');
        }
    });

    $('.invitadosHeader').click(function() {
        if(!$(this).hasClass('activo')){
            $('.invitadosHeader').addClass('activo');
            $('.asistentes').fadeOut(1000).addClass('hidden');
            $('.invitados').fadeIn(1000).removeClass('hidden');
            $('.asistentesHeader').removeClass('activo');
        }
    });

});


