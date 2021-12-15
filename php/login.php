<html>
<head>
    
    <title> User Login And Registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
    
    </head>
<body>
    <div class="container">
        <div class="login-box">
        
        <div class="row">
        <div class="LoginTable">
            <h2> Please Login Below </h2>
            <form action="validation.php" method="post">
                <div class="form-group">
                <label>Username: </label>
                    <input type="text" name="user" class="form-control" required>
                </div>
                <div class="form-group">
                <label>Password: </label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit"> Login </button>
            
            </form>           
        </div>
            
     <div class="RegistrationTable">
                <h2> Registration Here </h2>
            <form action="registration.php" method="post">
                <div class="form-group">
                <label>Username: </label>
                    <input type="text" name="user" class="form-control" required>
                </div>
                <div class="form-group">
                <label>Password: </label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit"> Register </button>
         </form>          
    </div> 
                </div>
                </div>
        </div>
</body>
</html>