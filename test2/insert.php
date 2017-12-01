<!DOCTYPE HTML>
<html>
<title></title>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>

        <div class="maindiv">
            <div class="divA">
                <div class="title"><h2>Insert Data Using PHP</h2></div>
                <div class="divB">
                    <div class="divD">
                        <p>Click On Menu</p>

                        <?php                        
                        $connection = mysqli_connect("localhost", "root", "", "company");
                      //  $db = mysqli_select_db("test", $connection);
						
						if (isset($_GET['submit'])) {
                        $id = $_GET['did'];
                        $name = $_GET['dname'];
                        $email = $_GET['demail'];
                        $mobile = $_GET['dmobile'];
                        $address = $_GET['daddress'];
                        $query = mysqli_query($connection,"insert employees set
  employee_name='$name', employee_email='$email', employee_contact='$mobile', 
   employee_address='$address'");
   						header('location:index.php');
                    }
									
						
                        ?>
                    </div>
                    <?php
                            echo "<form class=\"form\" method=\"get\">";
							echo "<h2>insert Form</h2>";
							echo "<hr/>";
                            echo "<br />";
                            echo "<label>" . "Name:" . "</label>" . "<br />";
                            echo"<input class=\"input\" type=\"text\" name=\"dname\" value=\"\" />";
                            echo "<br />";
                            echo "<label>" . "Email:" . "</label>" . "<br />";
                            echo"<input class=\"input\" type=\"text\" name=\"demail\" value=\"\" />";
                            echo "<br />";
                            echo "<label>" . "Mobile:" . "</label>" . "<br />";
                            echo"<input class=\"input\" type=\"text\" name=\"dmobile\" value=\"\" />";
                            echo "<br />";
                            echo "<label>" . "Address:" . "</label>" . "<br />";
                            echo "<textarea rows=\"15\" cols=\"15\" name=\"daddress\"\" />";
                            echo "</textarea>";
                            echo "<br />";
                            echo "<input class=\"submit\" type=\"submit\" name=\"submit\" value=\"insert\" />";
                            echo "</form>";
                   
                   if (isset($_GET['submit'])) {
				   echo '<div class="form" id="form3"><br><br><br><br><br><br><Span>Data Updated Successfuly......!!</span></div>';
				   }
                    ?>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>        
       
    </div>
</body>
</html>
<?php
//mysql_close($connection);
?>