<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="p.css">
    <title>LOGIN IN</title>
</head>
<header>
    <div class="nav-top">
        <div>
           <a href="">Name</a> 
        </div>
        <div style="display: flex;">
            <div class="nav-box">
                <input type="text" class="search" name="search" placeholder="Search..">
            </div>
            <div class="nav-box" onclick="openTab(event,'Cart')">
                <img src="images/cart.png" alt="cart">
            </div>
            <div class="nav-box drop" onclick="dropbar()">
                <img id="account" src="images/user.png" alt="user">
                <div class="dropdown" id="dropdown">
                    <a href="signup.html">Sign Up</a>
                    <a href="loginin.html">Login In</a>
                </div>
            </div>
        </div>
    </div>
</header>
<body class="body1">
    <form action="validation.php" method="POST">
        <div class="mother">
            <div>
                <p class="text">Login</p>
            </div>
            <div class="container">
                <div>
                    <?php if(isset($_GET['error'])){ ?>
                    <p class="wrong"><?php echo $_GET['error'];?></p>
                    <?php } ?>
                </div>
                <div>
                    <label for="uname">Username:</label>
                    <input type="text" name="usernm" placeholder="Username"><br>
                    <?php if(isset($_GET['error1'])){ ?>
                    <p class="wrong"><?php echo $_GET['error1'];?></p>
                    <?php } ?>
                </div>
                <div>
                    <label for="password">Password:</label>
                    <input type="password" name="passwrd" placeholder="Password"><br>
                    <?php if(isset($_GET['error2'])){ ?>
                    <p class="wrong"><?php echo $_GET['error2'];?></p>
                    <?php } ?>
                </div>
                <div>
                    <a href="signup.html">Don't have an account?</a>
                </div>
            </div><br>
            <div>
                <button type="submit">Login</button>
            </div>
        </div>
    </form>
</body>

</html>