<!DOCTYPE HTML>

<html>

<title></title>

    <head>

        <link rel="stylesheet" type="text/css" href="style.css">

    </head>

    <body>



        <div class="maindiv">

            <div class="divA">

                <div class="title"><h2>Search Data Using PHP</h2></div>

                <div class="divB">

                    <div class="divD">
						<a href = "index.php" >Home</a></br></br></br>
						
                        <p>Search</p>



                        <?php                        

                        $connection = mysqli_connect("localhost", "root", "", "sakila");

                      //  $db = mysqli_select_db("test", $connection);

						

                        ?>

                    </div>

					<html>

					<body>

					<form action="search.php" method="GET">

						<input id="search" name="searchVal" type="text" placeholder="type here">

						<input id="submit" type="submit" value="search">

					</form>

					</body>

					</html>

					

                    <?php

						if (isset($_GET['searchVal'])) 

						{

							$search = mysqli_real_escape_string($connection, $_GET['searchVal']);

							$query = mysqli_query($connection, "SELECT * FROM film WHERE title LIKE '%{$search}%';");

							while($row = mysqli_fetch_array($query))

							{

								//echo "<div id='link' onClick='addText(\"".$row['film_id']."\");'>" . $row['title'] . "</div>";

								echo "<div <b><a href=\"film_stock.php?film_id={$row['film_id']}\">{$row['title']}</a></b> </div>";								

							}

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