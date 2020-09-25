<?php 
session_start();

if($_SESSION['loggin'] != true){

    header('Location:login.php');
}


if( isset($_GET['logout']) ){
    if(session_unset()){
     header('Location:login.php');
    }
}

?>

<h3>Welcome <?php echo $_SESSION['username'];?> our dashboard</h3>

<form action="dashboard.php" method="get">
    <button type="submit" name="logout">Logout</button>
</form>