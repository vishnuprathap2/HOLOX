 <?php
 session_start();

                       
                        $_SESSION["firstname"]=$_POST["firstname"];
                        $_SESSION["lastname"]=$_POST["lastname"];
                        $_SESSION["email"]=$_POST["email"];
                        $_SESSION["user_name"]=$_POST["user_name"];
                        $_SESSION["Phone_No"]=$_POST["Phone_No"];
                        $_SESSION["usertype"]=$_POST["usertype"];

                        $host="localhost";
                        $port=3306;
                        $user="root";
                        $password="";
                        $dbname="hotels";

     $con = new mysqli($host, $user, $password, $dbname, $port)
                           or die ('Could not connect to the database server' . mysqli_connect_error());*/

                     

                        if ($_SESSION["usertype"]==1) {
                           $sql = "INSERT INTO user (FirstName, LastName, email,password,username,phone_no,flag_value) VALUES ('".$_SESSION["firstname"]."', '".$_SESSION["lastname"]."','".$_SESSION["email"]."','".$_POST["password"]."','".$_SESSION["user_name"]."','".$_SESSION["Phone_No"]."','".$_SESSION["usertype"]."')";
                              if (mysqli_query($con, $sql)) {
                                
                                 header('Location:signin.php ');
                              }else {
                                 echo "Error: " . $sql . "<br>" . mysqli_error($con);
                              }
                           }elseif ($_SESSION["usertype"]==2){
                           $sql = "INSERT INTO owner (FirstName, LastName, email,password,username,phone_no,flag_value) VALUES ('".$_SESSION["firstname"]."', '".$_SESSION["lastname"]."','".$_SESSION["email"]."','".$_POST["password"]."','".$_SESSION["user_name"]."','".$_SESSION["Phone_No"]."','".$_SESSION["usertype"]."')";
                              if (mysqli_query($con, $sql)) {
                           $con->exec($sql);
                                 header('Location:signin.php ');
                           }else {
                              echo "Error: " . $sql . "<br>" . mysqli_error($con);
            }
                       }

                        ?>