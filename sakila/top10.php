<!DOCTYPE HTML>
<html>
<title></title>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>

        <div class="maindiv">
            <div class="divA">
                <div class="title"><h2>User Data</h2></div>
                <div class="divB">
                    <div class="divD">
					<a href = "index.php" >Home</a></br></br></br>

                        <p>Top Loyal Customers</p>

                        <?php                        
                        $connection = mysqli_connect("localhost", "root", "", "sakila");
                      //  $db = mysqli_select_db("test", $connection);
                                                                                  
                                                                                                                           
                        $query = mysqli_query($connection,"  SELECT customer_id, first_name, last_name, count(*) rental_id FROM rental JOIN customer USING (customer_id) GROUP BY customer_id ORDER BY rental_id DESC LIMIT 10");
						for($i = 1; $i <=10; $i++)
						{
							$row = mysqli_fetch_array($query);
							echo "<div> #$i {$row['first_name']} {$row['last_name']}, R: {$row['rental_id']} </div>";
						}                                                          
                        ?>
						
						<p>Top Actors</p>
						
						<?php
						$queryActors = mysqli_query($connection, "SELECT first_name, last_name, count(*) films FROM actor JOIN film_actor USING (actor_id) GROUP BY actor_id, first_name, last_name ORDER BY films DESC LIMIT 10");
						for ($i = 1; $i <= 10; $i++)
						{
							$row = mysqli_fetch_array($queryActors);
							echo "<div> #$i {$row['first_name']} {$row['last_name']}, N: {$row['films']} </div>";
						}
						?>
						
						<p>Top Films</p>
						
						<?php
						$queryMovies = mysqli_query($connection, "SELECT title, count(*) rentals FROM rental JOIN inventory USING (inventory_id) JOIN film USING (film_id) GROUP BY title ORDER BY rentals DESC LIMIT 10");
						for ($i = 1; $i <= 10; $i++)
						{
							$row = mysqli_fetch_array($queryMovies);
							echo "<div> #$i {$row['title']}, N: {$row['rentals']} </div>";
						}
						?>
						
                    </div>
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
