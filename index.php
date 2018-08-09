<html>
<head></head>
<body>
<?php $var1 = 21; ?>
<h1>something from php <?= $var1 ?></h1>
<?php
$tags = '<input type="text" name="username" >';
$br = '<br>';
$btn = '<input type="submit" value="send">';
echo $tags.$br.$br. $btn;


?>
<form action="welcome.php" method="post">
    name: <input type="text" name="username1">
    Last Name: <input type="text" name="lname">
    <br>
    <br>
    <input type="submit" name="send">

</form>
</body>
</html>