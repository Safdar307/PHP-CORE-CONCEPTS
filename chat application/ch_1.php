<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}

require_once("require/general.php");

$general = new General();
?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?=$general->site_title();?></title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}

body{
    background:#edf2f7;
    padding:20px;
}

.header{
    background:#ffffff;
    border-radius:10px;
    padding:15px 25px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:20px;
    box-shadow:0 2px 8px rgba(0,0,0,.15);
}

.logo h2{
    color:#0d6efd;
}

.logo p{
    color:#666;
    font-size:14px;
    margin-top:5px;
}

.user-info{
    display:flex;
    align-items:center;
    gap:15px;
}

.logout{
    background:#dc3545;
    color:white;
    text-decoration:none;
    padding:8px 15px;
    border-radius:6px;
    font-weight:bold;
}

.logout:hover{
    background:#bb2d3b;
}

.container{
    display:flex;
    gap:20px;
}

.chat-section{
    width:75%;
    background:white;
    border-radius:10px;
    box-shadow:0 2px 8px rgba(0,0,0,.15);
    overflow:hidden;
}

.user-section{
    width:25%;
    background:white;
    border-radius:10px;
    box-shadow:0 2px 8px rgba(0,0,0,.15);
    overflow:hidden;
}

.section-title{
    background:#0d6efd;
    color:white;
    padding:15px;
    font-size:20px;
    font-weight:bold;
}

#show_messages{
    height:450px;
    overflow-y:auto;
    background:#f7f7f7;
    padding:15px;
}

#show_users{
    height:510px;
    overflow-y:auto;
    padding:10px;
}

.message-box{
    display:flex;
    gap:10px;
    padding:15px;
    border-top:1px solid #ddd;
    background:#fff;
}

.message-box textarea{
    flex:1;
    resize:none;
    height:55px;
    padding:12px;
    border:1px solid #ccc;
    border-radius:8px;
    outline:none;
    font-size:15px;
}

.message-box textarea:focus{
    border-color:#0d6efd;
}

.send-btn{
    width:120px;
    border:none;
    background:#0d6efd;
    color:white;
    border-radius:8px;
    cursor:pointer;
    font-size:16px;
    font-weight:bold;
}

.send-btn:hover{
    background:#0b5ed7;
}

#message_sent{
    text-align:center;
    padding:8px;
    font-weight:bold;
}

::-webkit-scrollbar{
    width:8px;
}

::-webkit-scrollbar-thumb{
    background:#bbb;
    border-radius:20px;
}

::-webkit-scrollbar-thumb:hover{
    background:#888;
}

.message{
    max-width:70%;
    margin-bottom:15px;
    display:flex;
    gap:10px;
    align-items:flex-end;
}

.message.mine{
    margin-left:auto;
    flex-direction:row-reverse;
}

.message img{
    width:45px;
    height:45px;
    border-radius:50%;
    object-fit:cover;
}

.message-body{
    background:#ffffff;
    padding:10px 15px;
    border-radius:12px;
    box-shadow:0 1px 5px rgba(0,0,0,.1);
}

.message.mine .message-body{
    background:#d9ecff;
}

.message-name{
    font-weight:bold;
    margin-bottom:5px;
    color:#333;
}

.message-text{
    word-break:break-word;
    line-height:22px;
}

.message-time{
    margin-top:8px;
    font-size:12px;
    color:#666;
    text-align:right;
}

#show_users{
    padding:0;
    background:#fff;
}

.user-card{
    display:flex;
    align-items:center;
    padding:12px;
    gap:10px;
    border-bottom:1px solid #ececec;
    transition:.2s;
    cursor:pointer;
}

.user-card:hover{
    background:#f7f7f7;
}

.user-avatar{
    width:38px;
    height:38px;
    border-radius:50%;
    object-fit:cover;
    flex-shrink:0;
}

.user-text{
    flex:1;
}

.user-fullname{
    font-size:15px;
    font-weight:bold;
    color:#222;
    margin-bottom:3px;
}

.user-status{
    font-size:12px;
}

.online{
    color:#16a34a;
    font-weight:bold;
}

.offline{
    color:#888;
}


</style>

<script>

setInterval(show_messages,1000);
setInterval(show_users,3000);
setInterval(update_status,3000);

function ajax(method,url,data,callback){

    var xhr;

    if(window.XMLHttpRequest){
        xhr=new XMLHttpRequest();
    }else{
        xhr=new ActiveXObject("Microsoft.XMLHTTP");
    }

    xhr.onreadystatechange=function(){

        if(xhr.readyState==4 && xhr.status==200){
            callback(xhr.responseText);
        }

    };

    xhr.open(method,url,true);

    if(method=="POST"){
        xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    }

    xhr.send(data);

}

function send_message(){

    var message=document.getElementById("message").value.trim();
	

    if(message==""){
        return;
    }

    ajax(
        "POST",
        "process.php",
        "action=send_message&message="+encodeURIComponent(message),
        function(response){

            document.getElementById("message_sent").innerHTML=response;
            document.getElementById("message").value="";
           update_status();
			show_messages();
			

            setTimeout(function(){
                document.getElementById("message_sent").innerHTML="";
            },2000);

        }
    );

}

function show_messages(){

    ajax(
        "GET",
        "process.php?action=show_messages",
        null,
        function(response){

            var box = document.getElementById("show_messages");

            var shouldScroll =
                (box.scrollHeight - box.scrollTop - box.clientHeight) < 50;

            box.innerHTML = response;

            if(shouldScroll){
                box.scrollTop = box.scrollHeight;
            }

        }
    );

}

function show_users(){

    ajax(
        "GET",
        "process.php?action=show_users",
        null,
        function(response){

            document.getElementById("show_users").innerHTML=response;

        }
    );

}

function update_status(){

    ajax(
        "POST",
        "process.php",
        "action=update_status",
        function(response){

        }
    );

}

window.onload=function(){

    show_messages();
    show_users();
    update_status();

    document.getElementById("message").addEventListener("keydown",function(e){

        if(e.key==="Enter" && !e.shiftKey){

            e.preventDefault();
            send_message();

        }

    });

};

</script>

</head>

<body>

<div class="header">

    <div class="logo">

        <h2><?=$general->site_title();?></h2>

        <p>Welcome,
            <b>
                <?=$_SESSION['user']['first_name']." ".$_SESSION['user']['last_name'];?>
            </b>
        </p>

    </div>

    <div class="user-info">

        <a href="logout.php" class="logout">
            Logout
        </a>

    </div>

</div>

<div class="container">

<div class="chat-section">

<div class="section-title">
  Group Chat
</div>

<div id="show_messages">


</div>

<div class="message-box">

    <textarea
        id="message"
        placeholder="Type your message here..."></textarea>

    <button
        class="send-btn"
        onclick="send_message()">
        Send
    </button>

</div>

<div id="message_sent"></div>

</div>

<div class="user-section">

    <div class="section-title">
        Users
    </div>

    <div id="show_users">

    </div>

</div>

</div>

</body>
</html>