<?php
   
?>
<!DOCTYPE html>
<html lang="en" class="no-js">

    <head>
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
       
        <link rel="stylesheet" href="assets/css/supersized.css">
        <link rel="stylesheet" href="assets/css/style.css">
		
		
    </head>

    <body>

        <div class="page-container">
		
            <h1>BOOK TICKETS</h1>
			<p>Refill your bKash account with sufficient balance.(250 taka for each ticket)</p>
            <form action="htbooked.php" method="post"> 
			    <br><br><br>
			    Select the Cinema Hall and Show Time from the list below!
			    <select name="select" required>
				
                <option value="mcin"><style="background-color:white"><pre>Metro Cinema,01-02-2016,03:00 PM</pre></style></option>
                <option value="mpl">Movie Place,02-02-2016,07:00PM</option>
                <option value="csc">City Square Cineplex,01-02-2016,09:00 PM</option>
                
                </select>
				
                <input type="text" name="no" class="no" placeholder="No. of Tickets" required>
                <input type="text" name="bKash" class="bKash" placeholder="bKash Transaction Id" required>
                <button type="submit" name="submit">Book!</button>
                
            </form>
            
        </div>

        <script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/js/supersized.3.2.7.min.js"></script>
        <script src="assets/js/supersized-init.js"></script>

    </body>

</html>

