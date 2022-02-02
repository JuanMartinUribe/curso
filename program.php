<?php 

$conn = mysqli_connect("localhost","root","","practica");

$nameTable = "CREATE TABLE IF NOT EXISTS person (
        name VARCHAR(30) NOT NULL)
    "
;
    
if ($conn->query($nameTable)===TRUE){
    echo "connection successful";
}   
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $first_name = mysqli_real_escape_string($conn,$_REQUEST['name']);
}

$insert = "INSERT INTO PERSON(name)
    VALUES ('$first_name')
"
;

if($conn->query($insert)===true){
    echo "data saved";
}
else{
    echo "ERROR";
}

?>

