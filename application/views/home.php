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
    <script src="/assets/js/chat.js"></script>
    <script src="/assets/js/message.js"></script>
    <script src="/assets/js/notify.js"></script>
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
        <input type="hidden" name="to" id="to"/>
        <div class="chat_window">
                <div class="close" style="margin-top:20px; margin-right:10px;"><img width="30" height="30" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2aWV3Qm94PSIwIDAgNjQgNjQiIHZlcnNpb249IjEuMSI+CjxnIGlkPSJzdXJmYWNlMSI+CjxwYXRoIHN0eWxlPSIgZmlsbDojRUQ3ODk5OyIgZD0iTSA1OSAzMyBDIDU5IDQ4LjQ2NDg0NCA0Ni40NjQ4NDQgNjEgMzEgNjEgQyAxNS41MzUxNTYgNjEgMyA0OC40NjQ4NDQgMyAzMyBDIDMgMTcuNTM1MTU2IDE1LjUzNTE1NiA1IDMxIDUgQyA0Ni40NjQ4NDQgNSA1OSAxNy41MzUxNTYgNTkgMzMgWiAiLz4KPHBhdGggc3R5bGU9IiBmaWxsOiNGMjgzQTU7IiBkPSJNIDQzIDMyIEMgNDMgMzguNjI4OTA2IDM3LjYyODkwNiA0NCAzMSA0NCBDIDI0LjM3MTA5NCA0NCAxOSAzOC42Mjg5MDYgMTkgMzIgQyAxOSAyNS4zNzEwOTQgMjQuMzcxMDk0IDIwIDMxIDIwIEMgMzcuNjI4OTA2IDIwIDQzIDI1LjM3MTA5NCA0MyAzMiBaICIvPgo8cGF0aCBzdHlsZT0iIGZpbGw6I0ZBRUZERTsiIGQ9Ik0gMzEgMzIgQyAzMS41NTA3ODEgMzIgMzIgMzEuNTUwNzgxIDMyIDMxIEwgMzIgMTEgQyAzMiAxMC40NDkyMTkgMzEuNTUwNzgxIDEwIDMxIDEwIEMgMzAuNDQ5MjE5IDEwIDMwIDEwLjQ0OTIxOSAzMCAxMSBMIDMwIDMxIEMgMzAgMzEuNTUwNzgxIDMwLjQ0OTIxOSAzMiAzMSAzMiBaICIvPgo8cGF0aCBzdHlsZT0iIGZpbGw6IzhENkM5RjsiIGQ9Ik0gMzEgNCBDIDE0Ljk4NDM3NSA0IDIgMTYuOTg0Mzc1IDIgMzMgQyAyIDQ5LjAxNTYyNSAxNC45ODQzNzUgNjIgMzEgNjIgQyA0Ny4wMTU2MjUgNjIgNjAgNDkuMDE1NjI1IDYwIDMzIEMgNjAgMTYuOTg0Mzc1IDQ3LjAxNTYyNSA0IDMxIDQgWiBNIDMxIDYwIEMgMTYuMDg5ODQ0IDYwIDQgNDcuOTEwMTU2IDQgMzMgQyA0IDE4LjA4OTg0NCAxNi4wODk4NDQgNiAzMSA2IEMgNDUuOTEwMTU2IDYgNTggMTguMDg5ODQ0IDU4IDMzIEMgNTggNDcuOTEwMTU2IDQ1LjkxMDE1NiA2MCAzMSA2MCBaICIvPgo8cGF0aCBzdHlsZT0iIGZpbGw6IzhENkM5RjsiIGQ9Ik0gMjEuODA4NTk0IDQzLjE5MTQwNiBDIDIyLjA3NDIxOSA0My4xOTE0MDYgMjIuMzMyMDMxIDQzLjA4NTkzOCAyMi41MTk1MzEgNDIuODk4NDM4IEwgMjMuOTI5Njg4IDQxLjQ4ODI4MSBDIDI0LjI2OTUzMSA0MS4wOTM3NSAyNC4yNDYwOTQgNDAuNSAyMy44Nzg5MDYgNDAuMTMyODEzIEMgMjMuNTA3ODEzIDM5Ljc2MTcxOSAyMi45MTc5NjkgMzkuNzM4MjgxIDIyLjUxOTUzMSA0MC4wNzgxMjUgTCAyMS4xMDE1NjMgNDEuNDg4MjgxIEMgMjAuODEyNSA0MS43NzczNDQgMjAuNzI2NTYzIDQyLjIwNzAzMSAyMC44Nzg5MDYgNDIuNTgyMDMxIEMgMjEuMDM1MTU2IDQyLjk1NzAzMSAyMS40MDIzNDQgNDMuMjAzMTI1IDIxLjgwODU5NCA0My4xOTkyMTkgWiAiLz4KPHBhdGggc3R5bGU9IiBmaWxsOiM4RDZDOUY7IiBkPSJNIDM4Ljc4MTI1IDI2LjIxODc1IEMgMzkuMDQ2ODc1IDI2LjIyMjY1NiAzOS4zMDA3ODEgMjYuMTE3MTg4IDM5LjQ4ODI4MSAyNS45Mjk2ODggTCA0MC44OTg0MzggMjQuNTE5NTMxIEMgNDEuMjM4MjgxIDI0LjEyNSA0MS4yMTg3NSAyMy41MzEyNSA0MC44NDc2NTYgMjMuMTY0MDYzIEMgNDAuNDc2NTYzIDIyLjc5Mjk2OSAzOS44ODY3MTkgMjIuNzY5NTMxIDM5LjQ4ODI4MSAyMy4xMDkzNzUgTCAzOC4wNzgxMjUgMjQuNTE5NTMxIEMgMzcuNzkyOTY5IDI0LjgwNDY4OCAzNy43MDMxMjUgMjUuMjM4MjgxIDM3Ljg1OTM3NSAyNS42MTMyODEgQyAzOC4wMTU2MjUgMjUuOTg4MjgxIDM4LjM4MjgxMyAyNi4yMzA0NjkgMzguNzg5MDYzIDI2LjIzMDQ2OSBaICIvPgo8cGF0aCBzdHlsZT0iIGZpbGw6IzhENkM5RjsiIGQ9Ik0gMzguMDcwMzEzIDQxLjQ4ODI4MSBMIDM5LjQ4MDQ2OSA0Mi44OTg0MzggQyAzOS44NzUgNDMuMjM4MjgxIDQwLjQ2ODc1IDQzLjIxODc1IDQwLjgzNTkzOCA0Mi44NDc2NTYgQyA0MS4yMDcwMzEgNDIuNDc2NTYzIDQxLjIzMDQ2OSA0MS44ODY3MTkgNDAuODkwNjI1IDQxLjQ4ODI4MSBMIDM5LjQ4MDQ2OSA0MC4wNzgxMjUgQyAzOS4wODIwMzEgMzkuNzM4MjgxIDM4LjQ5MjE4OCAzOS43NjE3MTkgMzguMTIxMDk0IDQwLjEzMjgxMyBDIDM3Ljc1MzkwNiA0MC41IDM3LjczMDQ2OSA0MS4wOTM3NSAzOC4wNzAzMTMgNDEuNDg4MjgxIFogIi8+CjxwYXRoIHN0eWxlPSIgZmlsbDojOEQ2QzlGOyIgZD0iTSAyMy45Mjk2ODggMjQuNTExNzE5IEwgMjIuNTExNzE5IDIzLjEwMTU2MyBDIDIyLjExMzI4MSAyMi43NjE3MTkgMjEuNTIzNDM4IDIyLjc4MTI1IDIxLjE1MjM0NCAyMy4xNTIzNDQgQyAyMC43ODEyNSAyMy41MjM0MzggMjAuNzYxNzE5IDI0LjExMzI4MSAyMS4xMDE1NjMgMjQuNTExNzE5IEwgMjIuNTExNzE5IDI1LjkyMTg3NSBDIDIyLjkwNjI1IDI2LjI2MTcxOSAyMy41IDI2LjIzODI4MSAyMy44NjcxODggMjUuODY3MTg4IEMgMjQuMjM4MjgxIDI1LjUgMjQuMjYxNzE5IDI0LjkwNjI1IDIzLjkyMTg3NSAyNC41MTE3MTkgWiAiLz4KPHBhdGggc3R5bGU9IiBmaWxsOiM4RDZDOUY7IiBkPSJNIDQzLjMwMDc4MSAzNy4zMjgxMjUgQyA0My42NDg0MzggMzcuNDM3NSA0NC4wMzEyNSAzNy4zNDM3NSA0NC4yOTI5NjkgMzcuMDg5ODQ0IEMgNDQuNTU0Njg4IDM2LjgzNTkzOCA0NC42NTYyNSAzNi40NTcwMzEgNDQuNTU0Njg4IDM2LjEwNTQ2OSBDIDQ0LjQ1NzAzMSAzNS43NTM5MDYgNDQuMTc1NzgxIDM1LjQ4NDM3NSA0My44MjAzMTMgMzUuMzk4NDM4IEwgNDEuODkwNjI1IDM0Ljg3ODkwNiBDIDQxLjUzOTA2MyAzNC43NzM0MzggNDEuMTYwMTU2IDM0Ljg2MzI4MSA0MC44OTg0MzggMzUuMTIxMDk0IEMgNDAuNjM2NzE5IDM1LjM3NSA0MC41MzUxNTYgMzUuNzUzOTA2IDQwLjYzMjgxMyAzNi4xMDU0NjkgQyA0MC43MzA0NjkgMzYuNDU3MDMxIDQxLjAxNTYyNSAzNi43MjY1NjMgNDEuMzcxMDk0IDM2LjgwODU5NCBaICIvPgo8cGF0aCBzdHlsZT0iIGZpbGw6IzhENkM5RjsiIGQ9Ik0gMTguMTc5Njg4IDMwLjYwMTU2MyBMIDIwLjEwOTM3NSAzMS4xMjEwOTQgQyAyMC40NjA5MzggMzEuMjI2NTYzIDIwLjgzOTg0NCAzMS4xMzY3MTkgMjEuMTAxNTYzIDMwLjg3ODkwNiBDIDIxLjM2MzI4MSAzMC42MjUgMjEuNDY0ODQ0IDMwLjI0NjA5NCAyMS4zNjcxODggMjkuODk0NTMxIEMgMjEuMjY5NTMxIDI5LjU0Mjk2OSAyMC45ODQzNzUgMjkuMjczNDM4IDIwLjYyODkwNiAyOS4xOTE0MDYgTCAxOC42OTkyMTkgMjguNjcxODc1IEMgMTguMzUxNTYzIDI4LjU2MjUgMTcuOTY4NzUgMjguNjU2MjUgMTcuNzA3MDMxIDI4LjkxMDE1NiBDIDE3LjQ0NTMxMyAyOS4xNjQwNjMgMTcuMzQzNzUgMjkuNTQyOTY5IDE3LjQ0NTMxMyAyOS44OTQ1MzEgQyAxNy41NDI5NjkgMzAuMjQ2MDk0IDE3LjgyNDIxOSAzMC41MTU2MjUgMTguMTc5Njg4IDMwLjYwMTU2MyBaICIvPgo8cGF0aCBzdHlsZT0iIGZpbGw6IzhENkM5RjsiIGQ9Ik0gNDQuNTE5NTMxIDI5LjM3ODkwNiBDIDQ0LjM3ODkwNiAyOC44NDc2NTYgNDMuODMyMDMxIDI4LjUzMTI1IDQzLjMwMDc4MSAyOC42NzE4NzUgTCA0MS4zNzEwOTQgMjkuMTkxNDA2IEMgNDEuMDE1NjI1IDI5LjI3MzQzOCA0MC43MzA0NjkgMjkuNTQyOTY5IDQwLjYzMjgxMyAyOS44OTQ1MzEgQyA0MC41MzUxNTYgMzAuMjQ2MDk0IDQwLjYzNjcxOSAzMC42MjUgNDAuODk4NDM4IDMwLjg3ODkwNiBDIDQxLjE2MDE1NiAzMS4xMzY3MTkgNDEuNTM5MDYzIDMxLjIyNjU2MyA0MS44OTA2MjUgMzEuMTIxMDk0IEwgNDMuODIwMzEzIDMwLjYwMTU2MyBDIDQ0LjM0NzY1NiAzMC40NTMxMjUgNDQuNjYwMTU2IDI5LjkxMDE1NiA0NC41MTk1MzEgMjkuMzc4OTA2IFogIi8+CjxwYXRoIHN0eWxlPSIgZmlsbDojOEQ2QzlGOyIgZD0iTSAxNy40ODA0NjkgMzYuNjIxMDk0IEMgMTcuNjIxMDk0IDM3LjE1MjM0NCAxOC4xNjc5NjkgMzcuNDY4NzUgMTguNjk5MjE5IDM3LjMyODEyNSBMIDIwLjYyODkwNiAzNi44MDg1OTQgQyAyMC45ODQzNzUgMzYuNzI2NTYzIDIxLjI2OTUzMSAzNi40NTcwMzEgMjEuMzY3MTg4IDM2LjEwNTQ2OSBDIDIxLjQ2NDg0NCAzNS43NTM5MDYgMjEuMzYzMjgxIDM1LjM3NSAyMS4xMDE1NjMgMzUuMTIxMDk0IEMgMjAuODM5ODQ0IDM0Ljg2MzI4MSAyMC40NjA5MzggMzQuNzczNDM4IDIwLjEwOTM3NSAzNC44Nzg5MDYgTCAxOC4xNzk2ODggMzUuMzk4NDM4IEMgMTcuNjUyMzQ0IDM1LjU0Njg3NSAxNy4zMzk4NDQgMzYuMDg5ODQ0IDE3LjQ4MDQ2OSAzNi42MjEwOTQgWiAiLz4KPHBhdGggc3R5bGU9IiBmaWxsOiNGQUVGREU7IiBkPSJNIDQ0Ljg3ODkwNiAxOC42MDE1NjMgQyA0NC40ODA0NjkgMTguMzE2NDA2IDQzLjkzNzUgMTguMzYzMjgxIDQzLjU5Mzc1IDE4LjcxMDkzOCBDIDQzLjI0NjA5NCAxOS4wNTg1OTQgNDMuMjAzMTI1IDE5LjYwMTU2MyA0My40ODgyODEgMjAgQyA0OS4yNDYwOTQgMjUuNTIzNDM4IDUwLjY3OTY4OCAzNC4xNzk2ODggNDcuMDA3ODEzIDQxLjI2NTYyNSBDIDQzLjMzOTg0NCA0OC4zNTE1NjMgMzUuNDQxNDA2IDUyLjE3MTg3NSAyNy42MDkzNzUgNTAuNjYwMTU2IEMgMTkuNzczNDM4IDQ5LjE0NDUzMSAxMy44NzUgNDIuNjUyMzQ0IDEzLjEwOTM3NSAzNC43MTA5MzggQyAxMi4zNDM3NSAyNi43Njk1MzEgMTYuODk4NDM4IDE5LjI2OTUzMSAyNC4zMDA3ODEgMTYuMjg5MDYzIEMgMjQuODEyNSAxNi4wODU5MzggMjUuMDYyNSAxNS41MDM5MDYgMjQuODU5Mzc1IDE0Ljk4ODI4MSBDIDI0LjY1NjI1IDE0LjQ3NjU2MyAyNC4wNzQyMTkgMTQuMjI2NTYzIDIzLjU1ODU5NCAxNC40Mjk2ODggQyAxNS4zMzIwMzEgMTcuNzI2NTYzIDEwLjI1MzkwNiAyNi4wNDY4NzUgMTEuMDg1OTM4IDM0Ljg3MTA5NCBDIDExLjkxNDA2MyA0My42OTUzMTMgMTguNDU3MDMxIDUwLjkyMTg3NSAyNy4xNTYyNSA1Mi42MjUgQyAzNS44NTU0NjkgNTQuMzI0MjE5IDQ0LjY0MDYyNSA1MC4wOTc2NTYgNDguNzM0Mzc1IDQyLjIzNDM3NSBDIDUyLjgyODEyNSAzNC4zNzUgNTEuMjYxNzE5IDI0Ljc1MzkwNiA0NC44Nzg5MDYgMTguNjAxNTYzIFogIi8+CjxwYXRoIHN0eWxlPSIgZmlsbDojRkFFRkRFOyIgZD0iTSAzNy42OTkyMTkgMTYuMjg5MDYzIEMgMzguNTIzNDM4IDE2LjYyMTA5NCAzOS4zMjQyMTkgMTcuMDExNzE5IDQwLjA4OTg0NCAxNy40NjA5MzggQyA0MC41NTg1OTQgMTcuNjcxODc1IDQxLjEwOTM3NSAxNy40OTYwOTQgNDEuMzY3MTg4IDE3LjA1MDc4MSBDIDQxLjYyNSAxNi42MDkzNzUgNDEuNTAzOTA2IDE2LjA0Mjk2OSA0MS4wODk4NDQgMTUuNzM4MjgxIEMgNDAuMjM4MjgxIDE1LjI0MjE4OCAzOS4zNTU0NjkgMTQuODA4NTk0IDM4LjQ0MTQwNiAxNC40NDE0MDYgQyAzNy45MjU3ODEgMTQuMjM0Mzc1IDM3LjM0Mzc1IDE0LjQ4ODI4MSAzNy4xNDA2MjUgMTUgQyAzNi45Mzc1IDE1LjUxMTcxOSAzNy4xODc1IDE2LjA5Mzc1IDM3LjY5OTIxOSAxNi4zMDA3ODEgWiAiLz4KPC9nPgo8L3N2Zz4K"/></div>
                <div class="top_menu">
                    <div class="buttons">
                        <div value="feminino" class="button woman">&nbsp;</div>
                        <div value="masculino" class="button man">&nbsp;</div>
                        <div value="" class="button all">&nbsp;</div>
                    </div>
                    <div class="title"><label>Olá, <?php echo $this->session->userdata['user_session'][0]['name'];?></label></div>
                    <div class="buttons">
                        <div value="close" class="button close">&nbsp;</div>
                    </div>
                </div>

                <ul class="user_ul">
                <?php foreach ($users as $item):?>
                    <li><img class="user_chat" id="<?php echo $item["id"];?>" value="<?php echo $item["id"];?>" width="100" heigth="100" src="<?php echo $item["photo"];?>"/></li>
                <?php endforeach;?>
                </ul>
                <div class="bottom_wrapper clearfix">
                    <div class="message_input_wrapper">
                        <input class="message_input" placeholder="Escreva sua mensagem..." /></div>
                        <div class="send_message">
                            <div class="icon"></div>
                            <div class="text_button">Enviar</div>
                        </div> 
                        <div class="view_message">
                            <div class="icon"></div>
                            <div class="text_button">Mensagens</div>
                        </div> 
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