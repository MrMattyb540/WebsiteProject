<html>
<head>
    
    <title> User Login And Registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
    
    </head>
<body>
    <div class="container">
        <div class="login-box">
        
        <div>
        <div>
            <h2> Please Book Below </h2>
            <form action="Booking.php" method="post">
                <div>
                <label>Day Of The Week:</label>
                    <input type="Date" name="DayOfWeek" class="form-control" required>
                </div>
                <div>
                <label>Time:</label>
                    <input type="Time" name="Time" class="form-control" required>
                </div>
                <div>
                <label>Name:</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <button type="submit" class="btn-primary"> Book Now </button>
            
            </form>           
        </div>

                </div>
                </div>
        </div>
</body>
</html>