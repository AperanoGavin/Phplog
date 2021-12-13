<?php 
include'include.php';
if($_SERVER['REQUEST_METHOD']==='POST'){
    $number= $_POST['number'];
    if($number!= 5){
        $log=("User put incorrect number ($number)");
        logger($log);
        echo "$number Invalid number";
    }else{
        $log=("User put correct number ($number)");
        logger($log);
        echo "$number Valid number";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input type="Text" name="number">
    <input type="submit">
</form>
    
</body>
</html>