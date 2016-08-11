<?php
session_start();
if(!isset($_SESSION['login_user'])){

   ?>

  <?php  header("location: ../index.html"); ?>

   <?php

    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="chat.css" rel="stylesheet" type="text/css">
    <script src="http://code.jquery.com/jquery-1.9.0.js"> </script>
    <title>Chat Box </title>

<script>
    function submitChat(){
        if (form1.msg.value == ''){
            alert('ENTER A MESSAGE!!!');
            return;
        }
     //   form1.uname.readOnly = true;
      //  form1.uname.style.border = 'none';
$('#imageload').show();

       // var uname = form1.uname.value;
        var msg = form1.msg.value;
        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function(){
            if(xmlhttp.readyState ==4&&xmlhttp.status==200){
                document.getElementById('chatlogs').innerHTML = xmlhttp.responseText;

                $('#imageload').hide();
            }

        }

        xmlhttp.open('GET', 'insert.php?&msg='+msg,true);
        xmlhttp.send();
    }

    $(document).ready(function(e){
        $.ajaxSetup({cache:false});
        setInterval(function(){$('#chatlogs').load('logs.php');}, 2000);

    });


</script>

</head>

<body>
<form name="form1">

    Your Chat Name: <b> <?php echo $_SESSION['username']; ?></b><br>


    Your Message: <br>

    <textarea name="msg" style="width:200px; height: 70px"></textarea><br>
 <a href="#" onclick="submitChat(); return true;" class="button"> Send</a><br> <br>



    <div id="imageload" style="display:none;">
       <img src=""/>
    </div>

    <div id="chatlogs" style="width:100%; text-align: ;">
        LOADING CHATLOGS PLEASE WAIT......<img src=""/>
    </div>




    </form>

</body>
</html>



