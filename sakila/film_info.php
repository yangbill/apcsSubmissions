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
                        <p>Search</p>

                        <?php                        
                        $connection = mysqli_connect("localhost", "root", "", "sakila");
                      //  $db = mysqli_select_db("test", $connection);
						
                        ?>
                    </div>
                    <?php
						if (isset($_GET['film_id'])) 
						{
							$search = mysqli_real_escape_string($connection, $_GET['film_id']);
							$query = mysqli_query($connection, "SELECT * FROM film WHERE film_id EQUALS $search;");
							while($row = mysqli_fetch_array($query))
							{
								echo "<div>ID: {row[film_id]}</div>;				
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