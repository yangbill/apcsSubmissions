
<!DOCTYPE HTML>

<html>

<title></title>

    <head>

        <link rel="stylesheet" type="text/css" href="style.css">

    </head>

    <body>



        <div class="maindiv">

            <div class="divA">

                <div class="title"><h2>Billibusters</h2></div>

                <div class="divB">

                    <div class="divD">

                        <p>Welcome to Billibusters!</p>

						<a href = "index.php" >Home</a></br>
						<a href = "search.php" >Search for a Movie!</a></br>
						<a href = "top10.php" >Statistics</a></br></br>

						</br></br>

                    </div>

						 <?php                        

                        $connection = mysqli_connect("localhost", "root", "", "sakila");

                      //  $db = mysqli_select_db("test", $connection);

						

						

									

                        $query = mysqli_query($connection,"select * from film_list");

						echo"<table width= '60%'>";

						    echo"<tr>";

							echo "<th width='20%'>Film ID</th>";

							echo "<th width='40%'>Film Name</th>";

							echo "<th width= '40%'>Film Category</th>";

						    echo"</tr>";

                        while ($row = mysqli_fetch_array($query)) 

						{

                            echo"<tr>";

							echo "<td width='10%'>".$row['FID']."</td>";

							echo "<td width='50%'>".$row['title']."</td>";

							echo "<td width= '40%'>".$row['category']."</td>";

						    echo"</tr>";

  

                        }

						echo"</table>";

                        ?>

                    

                    <div class="clear">

				

					

					</div>

					

                </div>

                <div class="clear">   </div>

				

            </div>        

     

    </div>

</body>

</html>

<?php

//mysql_close($connection);

?>