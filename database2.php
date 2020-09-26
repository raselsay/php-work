<?php 

$dbconnet = [
    'host' => 'localhost',
    'username' => 'root',
    'password' => '123456',
    'dbname' => 'php_work'
];


$conn = new mysqli( $dbconnet['host'],$dbconnet['username'],$dbconnet['password'],$dbconnet['dbname']);

if( $conn->connect_errno ){
    echo 'Database connect error';
}

$id =3;

// $sql = "update user set lastname='alex',email='alex@gmail.com' where id=7";

$sql = "select * from user";

$result = $conn->query($sql);

// if( $result->fetch_assoc() >= 0 ){

    while($raw = $result->fetch_assoc()){
        echo 'Name : '. $raw['firstname'].' '.$raw['lastname'].'<br>';
    }

// } else{
//     echo 'have no data';
// }


if(isset($_POST['btn'])){

    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
 
    $inser = "INSERT INTO user(firstname,lastname,email) value('$fname','$lname','$email')";

    if($conn->query($inser) == true){
        echo 'create';

        header('location:database2.php');
    } else {
        echo 'error';
    }

}

// var_dump( $_SERVER );


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <form action="database2.php" method="post">

        <input type="text" name="firstname"> <br>
        <input type="text" name="lastname"> <br>
        <input type="text" name="email"> <br>
        <button type="submit" name="btn">save</button>

    </form>
</body>
</html>
