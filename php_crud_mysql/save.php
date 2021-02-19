<?php 

include("db.php");

if(isset($_POST['save'])){
    $producto = $_POST['producto'];
    
    $query = "INSERT INTO crud(producto,cantidad) VALUES ('$producto','$cantidad')";
    $result = mysqli_query($conn,$query);
    if(!$result){
        die("Query falled");
    } 
    echo 'saved'; 
}

?>