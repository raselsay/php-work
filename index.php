<?php 

session_start();

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



// <img src="" alt="">


if( isset($_POST['btn'])){
 
  $target_file = 'uploads/'.basename($_FILES["photo"]["name"]);

  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  var_dump(pathinfo('/www/htdocs/inc/lib.inc.php',PATHINFO_EXTENSION));


  if( move_uploaded_file( $_FILES["photo"]["tmp_name"], $target_file ) ){

    echo " E beda tor photo upload hoyice ";  
  } else{
    echo "Sorry hoy nai";
  }

}



function printFormatted($stirng,$function)
{
	return $function($stirng);
}

$stirng = "slkfjlskfjlksfl'askwfmlkasf";

function sss($s){
	return $s .'--------------------------- i -------------';
}

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
 
var_dump(json_decode($jsonobj));


// function printFormatted($stirng,$symable){
// 	return 
// }



?>

