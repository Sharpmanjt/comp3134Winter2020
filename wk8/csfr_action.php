<?php 
    session_start();
    $confirmation = $_SESSION["confirmation"];
    $confirmation2 = $_POST["confirmation"];
    $success = $confirmation == $confirmation2;

if($success)
{
    ?>
<form method="POST">
    <input type="text" name="username"> 
    <input type="text" name="password"> 
    <div>
        <p id="splash"></p>
    </div>
    <input type="submit">
</form>

<script>

function check(e){
    if(e.username.value != "host") return false
    if(e.password.value!= "pass") return false
    return true
}

f.onsubmit=function(e){
        e.preventDefault();

        if(check(e.target.elements)) var msg = "Success"
        else var msg = "Failure"

        document.getElementById("splash").innerHTML = msg
    }

</script><?php
}
 ?>