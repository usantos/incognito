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
                <div class="title"><label>Registre-se</label></div>
            </div>
            
            <div class="form_register">
            <form role="form" style="width:400px; margin: 0 auto;">
                <div class="required-field-block">
                    <input required type="text" id="name" name="name" placeholder="Nome" class="form-control">
                    <div class="required-icon">
                        <div class="text">*</div>
                    </div>
                </div>
                
                <div class="required-field-block">
                    <input required type="text" id="email" name="email" placeholder="E-mail" class="form-control">
                    <div class="required-icon">
                        <div class="text">*</div>
                    </div>
                </div>
<br>
                <div class="required-field-block">
					<select required id="gender" name="gender" class="form-control">
						<option selected value="">Selecione...</option>
						<option value="masculino">Masculino</option>
						<option value="feminino">Feminino</option>
					</select>
                    <div class="required-icon">
                        <div class="text">*</div>
                    </div>
                </div>
        
                <div class="required-field-block">
                    <input required type="text" id="username" name="username" placeholder="Usuário" class="form-control">
                    <div class="required-icon">
                        <div class="text">*</div>
                    </div>
                </div>

                <div class="required-field-block">
                    <input required type="password" id="password" name="password" placeholder="Senha" class="form-control">
                    <div class="required-icon">
                        <div class="text">*</div>
                    </div>
                </div>
                
            
            </div>

            <div class="bottom_wrapper clearfix">
               <div class="save_user">
					<div class="icon"></div>
					<div class="text_button">Registrar</div>
				</div>
				<a href="/auth">Entrar</href>
            </div>
			
            </form>
    </body>
</html>