<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER REGISTRATION IN PHP</title>
    <link rel="stylesheet" href="css">
</head>
<body>

<div>
    <?php
    if(isset($_POST['create'])){
        $firstname = $_POST['firstname'];
        $lastname=$_['lastname'];
        $email=$_['email'];
        $phone=$_['phone'];
        $password=$_['password'];
        
    }
    ?>
</div>

    <div>
        <form action="registration.php" method="post" >
            <div class="container">  
                <h1>REGISTRATION</h1>
                <p>Fill up the fields with the correct values</p>
                <label for="firstname">First Name</label>
                <input type="text" name="firstname" required>

                <label for="lastname">Last Name</label>
                <input type="text" name="lastname" required>

                <label for="email">Email</label>
                <input type="email" name="email" required>

                <label for="phonenumber">Phone Number</label>
                <input type="text" name="phone" required>

                <label for="password">Password</label>
                <input type="password" name="password" required>

                <input type="submit" name="create" value="Sign Up">
            </div>
        </form>
    </div>
</body>
</html>