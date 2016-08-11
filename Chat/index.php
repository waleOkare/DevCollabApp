<?php

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="chat.css" rel="stylesheet" type="text/css">
    <title>Chat Box </title>

<script>
    function submitChat(){
        if (form1.uname.value == '' || form1.msg.value == ''){
            alert('ALL FIELDS ARE MANDATORY!!!!');
            return;
        }
        form1.uname.readOnly = true;
        form1.uname.style.border = 'none';

        var uname = form1.uname.value;
        var msg = form1.msg.value;
        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function(){
            if(xmlhttp.readyState ==4&&xmlhttp.status==200){
                document.getElementById('chatlogs').innerHTML = xmlhttp.responseText;
            }

        }

        xmlhttp.open('GET', 'insert.php?uname='+uname+'&msg='+msg,true);
        xmlhttp.send();
    }

</script>

</head>

<body>
<form name="form1">
    Enter Your Chatname:  <input type="text" name="uname" style="width: 200px;"><br>

    Your Message: <br>

    <textarea name="msg" style="width:200px; height: 70px"></textarea><br>
<a href="#" onclick="submitChat(); return true;"> Send</a><br> <br>

    <div id="chatlogs">
        LOADING CHATLOGS PLEASE WAIT......
    </div>




    </form>

</body>
</html>


