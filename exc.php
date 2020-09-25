<?php 

$name;
$text = "skdnsalkdnals";

$name = $text;


class Calcul{

    public $name;

    public function __construct($servername,$u,$p,$dbname=null)
    {
        $this->name = $text;
    }

    public function add($a,$b)
    {
        return $this->name;
    }
    
    public function sub($a,$b)
    {
        return $a-$b;
    }

}


$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "php_work";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


// $sql = "CREATE TABLE user (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     firstname VARCHAR(30) NOT NULL,
//     lastname VARCHAR(30) NOT NULL,
//     email VARCHAR(50)
//     )";

// if( $conn->query($sql) ){
//     echo 'User table ok';
// } else{
//     echo "sorry";
// }



$id =3;

$sql = "select * from user where id=".$id;


$result =  $conn->query($sql);

?>

<table border="1">

<thead>
<tr>
<td>first name</td>
    <td>laste name</td>
    <td>email</td>
</tr>
</thead>
<?php while( $raw = $result->fetch_assoc()){ ?>


<tr>
    <td><?php echo $raw['firstname'] ?></td>
    <td><?php echo $raw['lastname'] ?></td>
    <td><?php echo $raw['email'] ?></td>
</tr>


<?php } ?>

</table>

<!-- <input type="text"> -->



