<?php
$host="localhost";
$port=3306;
$socket="";
$user="root";
$password="";
$dbname="hotels";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
  or die ('Could not connect to the database server' . mysqli_connect_error());
  $sql = "SELECT  admin.email, admin.password,admin.flag_value,user.email, user.password,user.flag_value,owner.email, owner.password,owner.flag_value FROM admin,user,owner";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
  if(flag_value=='1')
  {
     header('Location:user.php ');
  }
  elseif (flag_value==2) 
  {
   header('Location:owner.php ');
  }
   else
   {
    header('Location:admin.php ');
   }
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}


//$con->close();

?>