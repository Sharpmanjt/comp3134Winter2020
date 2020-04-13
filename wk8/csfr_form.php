<?php 
    session_start();
    $_SESSION["confirmation"] = "hello";

?>
<form id="form1" method="POST" action="csfr.php">
    <input type="text" name="username" value="host"> 
    <input type="text" name="password" value="pass"> 
    <input type="hidden" name="confirmation" value="<?php echo $_SESSION["confirmation"]?>">
    <input type="submit">
</form>

<script>
    document.getElementById("form1").submit();
</script>