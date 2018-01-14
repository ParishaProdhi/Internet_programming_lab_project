<!DOCTYPE html>
<html lang="en" class="no-js">

    <head>

        <!-- CSS -->
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
        <link rel="stylesheet" href="assets/css/reset.css">
        <link rel="stylesheet" href="assets/css/supersized.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    </head>

    <body>

        <div class="page-container">
		
            <h1>BOOK TICKETS</h1>
			<p>Refill your bKash account with sufficient balance.(250 taka for each ticket)</p>
            <form action="everestbooked.php" method="post"> 
			    <br><br><br>
			    Select the Cinema Hall and Show Time from the list below!
			    <select required>
				
                <option value="mcin"><style="background-color:white"><pre>City Square Cineplex,01-02-2016,03:00 PM</pre></style></option>
                <option value="mpl">Metro Cinema,03-03-2016,06:00PM</option>
                
                
                </select>
				
                <input type="text" name="no" class="no" placeholder="No. of Tickets" required>
                <input type="text" name="bKash" class="bKash" placeholder="bKash Transaction Id" required>
                <button type="submit">Book!</button>
                <!--div class="error"><span>+</span></div-->
            </form>
            
        </div>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/js/supersized.3.2.7.min.js"></script>
        <script src="assets/js/supersized-init1.js"></script>
        <script src="assets/js/scripts.js"></script>

    </body>

</html>

