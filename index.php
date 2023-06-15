<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="page">
    <div class="container">
        <div class="header">
            <h2 class="weth">login Here</h2>
            <form action="">
                <input type="text" class="name" name="name" placeholder="enter name" required><br><br>
                <input type="email" class="name" name="email" placeholder="enter email"required>  <br><br>         
                <input type="password" class="name" name="password" placeholder="enter password"required><br><br>
                <!-- <input type="password" class="name" name="cpassword" placeholder="enter confirm password"><br><br> -->
                <select name="option" id="option" required>
                    <option value="user">User</option>
                    <option value="user">Admin</option>
                </select><br><br>
                
                <button type="submit" class="btn" id="register">Login</button>
                <h4>I don't have an <a href="register.php"> Account</a></h4>
            </form>
        </div>
    </div>
    </div>
    <script>
        var submit = document.getElementById("register");
        // var num = prompt("enter num: ");
        if (num % 2 == 0) {
            alert('the value is an even number');
        } else {
            alert('the value is an odd number');
        }
    </script>
   
</body>
</html>