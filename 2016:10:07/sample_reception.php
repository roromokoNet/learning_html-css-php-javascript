<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>sample_reception</title>
</head>
<body>
Hello! 

<?php
//print htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
print "</br>First name:";
print htmlspecialchars( $_POST['name'], ENT_QUOTES, 'UTF-8');
print "</br>Last name:";
print htmlspecialchars($_POST['name1'], ENT_QUOTES, 'UTF-8');
?>

</body>
</html>