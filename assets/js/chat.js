$(document).ready(function() {

    $(".load_messages").click(function() {
        location.href = '../home/index';
    });

    $(".user_chat").click(function() {
        $(".user_chat").removeClass("borderClass");
        $(this).toggleClass("borderClass");
        var id_user = $(this).attr('value');
        $("input[id=to]").val(id_user);
    });

    $(".close").click(function() {
        location.href = '../home/logout';
    });

    $('.required-icon').tooltip({
        placement: 'center',
        title: 'Campo requerido!'
    });
});