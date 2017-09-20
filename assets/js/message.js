(function() {
    var Message;
    Message = function(arg) {
        this.text = arg.text, this.message_side = arg.message_side;
        this.draw = function(_this) {
            return function() {
                var $message;
                $message = $($('.message_template').clone().html());
                $message.addClass(_this.message_side).find('.text').html(_this.text);
                $('.messages').append($message);
                return setTimeout(function() {
                    return $message.addClass('appeared');
                }, 0);
            };
        }(this);
        return this;
    };
    $(function() {

        $(".save_user").click(function() {
            $.ajax({
                type: "POST",
                url: "../user/save",
                dataType: "json",
                cache: true,
                success: function(response) {
                    location.href = "../auth";
                }
            });

        });

        $(".search_user").click(function() {
            location.href = "../home/index";
        });
        $(".view_message").click(function() {
            location.href = "../message/index";
        });

        var logged_user;
        $.ajax({
            type: "POST",
            url: "../user/get",
            dataType: "json",
            cache: true,
            success: function(response) {
                logged_user = response;
            }
        });

        var getMessageText, message_side, sendMessage;
        message_side = 'right';
        getMessageText = function() {
            var $message_input;
            $message_input = $('.message_input');
            return $message_input.val();
        };
        sendMessage = function(text, gender, me) {

            var $messages, message;

            if (text.trim() === '') {
                return;
            }

            $('.message_input').val('');

            $messages = $('.messages');

            message_side = me == true ? 'right' : 'left';

            if (gender == "male") {
                $(".text_wrapper").css("background-color", "#c7eafc");
                $(".avatar").css("background-color", "#c7eafc");
                $(".text").css("color", "#45829b");
            } else {
                $(".text_wrapper").css("background-color", "#ffe4db");
                $(".avatar").css("background-color", "#ffe4db");
                $(".text").css("color", "#ea9879");
            }

            message = new Message({
                text: text,
                message_side: message_side,
            });

            message.draw();

            return $messages.animate({ scrollTop: $messages.prop('scrollHeight') }, 0);
        };

        $('.woman, .man, .all').click(function() {
            $.ajax({
                type: "POST",
                url: "../user/getByGender",
                data: { 'gender': $(this).attr('value') },
                dataType: "json",
                cache: false,
                success: function(response) {
                    $("ul.user_ul").html("");
                    $.each(response, function(i, item) {
                        $("ul.user_ul").append("<li><img class='user_chat' id='" + item.id + "' value='" + item.id + "' width='100' heigth='100' src='" + item.photo + "'/></li>");
                    });

                    $(".user_chat").click(function() {
                        $(".user_chat").removeClass("borderClass");
                        $(this).toggleClass("borderClass");
                        var id_user = $(this).attr('value');
                        $("input[id=to]").val(id_user);
                    });
                },
                error: function(jqXHR, exception) {
                    var msg = '';
                    if (jqXHR.status === 0) {
                        msg = 'Not connect.\n Verify Network.';
                    } else if (jqXHR.status == 404) {
                        msg = 'Requested page not found. [404]';
                    } else if (jqXHR.status == 500) {
                        msg = 'Internal Server Error [500].';
                    } else if (exception === 'parsererror') {
                        msg = 'Requested JSON parse failed.';
                    } else if (exception === 'timeout') {
                        msg = 'Time out error.';
                    } else if (exception === 'abort') {
                        msg = 'Ajax request aborted.';
                    } else {
                        msg = 'Uncaught Error.\n' + jqXHR.responseText;
                    }
                    $.notify(msg, "warn");
                }
            });
        });
        $('.send_message').click(function(e) {
            if ($("input[id=to]").val() != "" && getMessageText() != "")
                chat_send_message(getMessageText(), $("input[id=to]").val());
            else
                $.notify("Escolha um usuário e mande sua mensagem", "error");
        });
        $('.message_input').keyup(function(e) {
            if (e.which === 13) {
                if ($("input[id=to]").val() != "" && getMessageText() != "")
                    chat_send_message(getMessageText(), $("input[id=to]").val());
                else
                    $.notify("Escolha um usuário e mande sua mensagem", "error");
            }
        });

        $.ajax({
            type: "POST",
            url: "../chat/get",
            dataType: "json",
            cache: true,
            success: function(response) {
                $.each(response, function(i, item) {
                    return sendMessage(item.message, item.gender, false);
                });
            }
        });
    });
}.call(this));

function chat_send_message(message, to) {

    $.ajax({
        type: "POST",
        url: "../chat/send",
        data: { 'message': message, 'to': to },
        dataType: "json",
        cache: false,
        success: function(response) {

            if(response == true){
                $.notify("Messagem enviada!", "success");  
                $("input[id=to]").val("");
                
                $('.message_input').val("");
                $('.message_input').empty();
                $('.message_input').html("");
                $(".user_chat").removeClass("borderClass");  
            }else{
                $.notify("Não foi possível enviar a mensagem\nTente Novamente", "success");
            }
        },
        error: function(jqXHR, exception) {
            var msg = '';
            if (jqXHR.status === 0) {
                msg = 'Not connect.\n Verify Network.';
            } else if (jqXHR.status == 404) {
                msg = 'Requested page not found. [404]';
            } else if (jqXHR.status == 500) {
                msg = 'Internal Server Error [500].';
            } else if (exception === 'parsererror') {
                msg = 'Requested JSON parse failed.';
            } else if (exception === 'timeout') {
                msg = 'Time out error.';
            } else if (exception === 'abort') {
                msg = 'Ajax request aborted.';
            } else {
                msg = 'Uncaught Error.\n' + jqXHR.responseText;
            }
            $.notify(msg, "warn");
        }
    });
}