<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Incógnito Chat</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1,initial-scale=1,user-scalable=1" />
    <!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="/assets/css/messages.css" />
	<!-- Google Font -->
	<link href="http://fonts.googleapis.com/css?family=Lato:100italic,100,300italic,300,400italic,400,700italic,700,900italic,900" rel="stylesheet" type="text/css">
    <!-- Bootstrap Core CSS -->
	<link type="text/css" rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<!-- jQuery Library -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
    <!-- Custom Js -->
    <script src="/assets/js/message.js"></script>
    <!-- Bootstrap Core JS -->
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
    <body>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-105975594-1', 'auto');
  ga('send', 'pageview');

</script>
         <div class="chat_window">
            <div class="top_menu">
                <div class="buttons">
                    <div value="female" class="button woman hide">&nbsp;</div>
                    <div value="male" class="button man hide">&nbsp;</div>
                    <div value="" class="button all hide">&nbsp;</div>                   
                </div>
                <div class="title"><label>Mensagens Recebidas</label></div>
                <div class="buttons">
                    <div value="close" class="button close">&nbsp;</div>
                </div>   
            </div>
            <ul class="messages">
                </ul>
                <div class="bottom_wrapper clearfix">
                    <div class="message_input_wrapper hide">
                        <input class="message_input hide" placeholder="Ecreva sua mensagem..." /></div>
                        <div class="search_user">
                            <div class="icon"></div>
                            <div class="text_button">Usuários</div>
                        </div>
                    </div>
                </div>
            <div class="message_template">
            <li class="message">
                <div class="avatar"></div>
                <div class="text_wrapper">
                    <div class="text"></div>
                </div>
            </li>
        </div>
    </body>
</html>