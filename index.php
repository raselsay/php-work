<?php 

// $file = fopen('demo.text','w');


// $text = "Abedin Rasel";

// fwrite($file,$text);

// $name = fopen('demo.text','r');

// // echo fread($name,filesize('demo.text'));

// if( fread($name,filesize('demo.text')) == "Abedin Rasel"){

//   echo "Has User";

// }


// function move_uploaded_file($tem_name,$target){

// }



 
// fclose($file);

// $_FILES = ['photo'=>['tem_name'=>'/tmp/php6XxSIn','name'=>'skjdnaskndkaslnd.png']];




if( isset($_POST['btn'])){
 
  $target_file = 'uploads/'.basename($_FILES["photo"]["name"]);

  if( move_uploaded_file( $_FILES["photo"]["tmp_name"], $target_file ) ){

    echo "ok upload";  
  } else{
    echo "Sorry hoy nai";
  }

}

?>


 <img src="uploads/<?php echo basename($_FILES["photo"]["name"])?>" alt="">

<form action="index.php" method="post" enctype="multipart/form-data">

   <input type="file" name="photo" id="">
   <button type="submit" name="btn">upload</button>

</form>