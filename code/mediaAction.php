<?php
$connection = mysqli_connect("localhost","root","","clstask");

if(isset($_POST['submit'])){
    
$imgs =  $_FILES['images'];


$imageName = $imgs['name'];
$tempAdress = $imgs['tmp_name'];
$destination = "images/".$imageName;
$type = $imgs['type'];


move_uploaded_file($tempAdress,$destination);

$query = "INSERT INTO `imagedata`(`imagename`,`imageAdress`,`imagetype`) VALUES('$imageName','$destination','$type')";



$res =  mysqli_query($connection,$query);

if($res){

    echo "<script>alert('Image Upload Succesfully');window.location.href='display.php'</script>";
}


}





?>