
<?php $connection = mysqli_connect("localhost","root","","clstask");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Images</title>
</head>
<body>
    
<?php

$query = "SELECT `imageAdress` from `imagedata`";

$res =  mysqli_query($connection,$query);

?>

<?php
while($row = mysqli_fetch_assoc($res)){

?>

<img src="<?php echo $row["imageAdress"]?>" alt="">

<?php }?>

</body>
</html>