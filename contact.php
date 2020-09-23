<?php include "header.php" ?>

<?php 

   $name = $_REQUEST['user'];
   $email = $_REQUEST['email'];

    if ( $_SERVER['REQUEST_METHOD']=='POST' ){
       if (empty($name)){
           echo  'Sorry is emplty value name';
       }
    }

?>
<?php include "footer.php" ?>