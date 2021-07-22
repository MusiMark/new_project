<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="p.css">
    <title>m</title>
</head>
<body class="main-container">
<!--nav bars-->
<header>
    <div class="nav-top">
        <div>
           <a href="">Name</a> 
        </div>
        <div style="display: flex;">
            <div class="nav-box">
                <input type="text" class="search" name="search" placeholder="Search..">
            </div>
            <div class="nav-box" onclick="openSide('Cart')">
                <img src="images/cart.png" alt="cart">
            </div>
            <div class="nav-box drop" onclick="dropbar()">
                <img id="account" src="images/user.png" alt="user">
                <div class="dropdown" id="dropdown">
                    <div>
                        <a>
                            <?php
                            session_start();
                            if(isset($_SESSION['First_Name'])&& isset($_SESSION['Username'])){
                                echo $_SESSION['First_Name'];
                            }else{
                                echo "Don't have an account";
                            }
                            ?>
                        </a>
                        <a href="logout.php">Log Out</a>
                    </div>
                    <a href="signup.html">Sign Up</a>
                    <a href="login.php">Login In</a>
                </div>
            </div>
        </div>
    </div>
    <div class="nav-bottom tab">
        <div>
            <button class="menubar" onclick="openSidebar()//,menuicon(this)"><div class="bar1"></div><div class="bar2"></div><div class="bar3"></div></button>
            <button class="tablinks" id="defaultOpen" onclick="openTab(event,'Home')">Home</button>
            <button class="tablinks" onclick="openTab(event,'Categories')">Categories</button>
            <button class="tablinks" onclick="openTab(event,'Fashion')">Fashion</button>
            <button class="tablinks" onclick="openTab(event,'Books')">Books</button>
            <button class="tablinks" onclick="openTab(event,'Electronics')">Electronics</button>   
        </div>
        <div>
            <button class="tablinks" onclick="openTab(event,'Sell_Items')">Sell Items</button>
        </div>
    </div>
</header>
<!--sidebar-->
<div id="sidebar" class="sidebar">
    <p href="javascript:void(0)" class="closebtn" onclick="closeSidebar()">&times;</p>
    <a onclick="openSide('Categories')">Categories</a>
    <ul>
        <li>Trending</li>
        <li>This week's selection</li>
        <li>Top deals</li>
    </ul>
    <a onclick="openSide('Fashion')">Fashion</a>
    <a href="#">Books</a>
    <a href="#">Electronics</a>
</div>
<!--HOME TAB-->
<div class="tabcontent" id="Home">
<!--slides-->
    <div class="slide-container">
        <div class="mySlides fade">
            <div class="square" ><img src="images/smartphone.jpeg" alt=""></div>
        </div>
        <div class="mySlides fade">
            <div class="square" style="background-image: url();"><img src="images/black-friday.jpg" alt=""></div>
        </div>
        <div class="mySlides fade">
            <div class="square" style="background-image: url();">3</div>
        </div>
        <div class="mySlides fade">
            <div class="square" style="background-image: url();">4</div>
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        <div class="homeslide">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
        </div>
    </div>
    <div class="row" style="margin-top: 100px;">
        <div><div class="square" style="background-image: url(images/best-selling.png);"></div><p>Top selling items</p></div>
        <div><div class="square" style="background-image: url(images/essential2.png);"></div><p>Essentials</p></div>
        <div><div class="square" style="background-image: url(images/discounts2.jpg);"></div><p>Discounts</p></div>
    </div>
    <div class="row">
        <div class="circle"><p>Top products</p></div>
        <div class="circle"><p>Top deals</p></div>
        <div class="circle"><p>Available products</p></div>
        <div class="circle"><p>Supermarket</p></div>
        <div class="circle"><p>Fresh products</p></div>
        <div class="circle"><p></p></div>
    </div>
    <div class="row">
        <div><div class="square" style="background-image: url(images/images2.jpeg);"></div><p>Outdoor Accesories</p></div>
        <div><div class="square" style="background-image: url(images/men\'s\ fashion.jpg);"></div><p>Men's Fashion</p></div>
        <div><div class="square" style="background-image: url(images/fashion.jpg);"></div><p>Women's Fashion</p></div>
    </div>
    <div class="row">
        <div><div class="square" style="background-image: url(images/sumer-clothes-for-kids.jpg);"></div><p>Kids wear</p></div>
        <div><div class="square" style="background-image: url(images/black-friday2.jpg);"></div><p>Black Friday</p></div>
        <div><div class="square" style="background-image: url();"></div><p></p></div>
    </div>
</div>
<!--CATEGORIES TAB--> 
<div id="Categories" class="main-container tabcontent">
    <h1>Categories</h1>
    <div>
        <div>
            <p>This week's selection</p>
            <div style="display:flex; justify-content:space-between;">
                <div class="circle"></div><div class="circle"></div><div class="circle"></div><div class="circle"></div>
                <div class="circle"></div><div class="circle"></div><div class="circle"></div>
            </div>
        </div>
        <div>
            <p>Trending items</p>
            <div style="display:flex; justify-content:space-between;">
                <div class="circle"></div><div class="circle"></div><div class="circle"></div><div class="circle"></div>
                <div class="circle"></div><div class="circle"></div><div class="circle"></div>
            </div>
        </div>
        <div>
            <p>Fresh goods</p>
            <div style="display:flex; justify-content:space-between;">
                <div class="circle"></div><div class="circle"></div><div class="circle"></div><div class="circle"></div>
                <div class="circle"></div><div class="circle"></div><div class="circle"></div>
            </div>
        </div>
        <div>
            <p>New products</p>
            <div style="display:flex; justify-content:space-between;">
                <div class="circle"></div><div class="circle"></div><div class="circle"></div><div class="circle"></div>
                <div class="circle"></div><div class="circle"></div><div class="circle"></div>
            </div>
        </div>
        <div>
            <p>Supermarket</p>
            <div style="display:flex; justify-content:space-between;">
                <div class="circle"></div><div class="circle"></div><div class="circle"></div><div class="circle"></div>
                <div class="circle"></div><div class="circle"></div><div class="circle"></div>
            </div>
        </div>
        <div>
            <p>Top Products</p>
            <div style="display:flex; justify-content:space-between;">
                <div class="circle"></div><div class="circle"></div><div class="circle"></div><div class="circle"></div>
                <div class="circle"></div><div class="circle"></div><div class="circle"></div>
            </div>
        </div>
    </div>
</div></div>
<!--FASHION TAB-->
<div id="Fashion" class="main-container tabcontent">
    <h1>Fashion</h1>
</div>
<!--BOOKS TAB-->
<div id="Books" class="main-container tabcontent">
    <h1>Books</h1>
</div>
<!--ELECTRONICS TAB-->
<div id="Electronics" class="main-container tabcontent">
    <h1>Electronics</h1>
</div>
<!--SELL TAB-->
<div id="Sell_Items" class="main-container tabcontent">
    <h1>Sell Items</h1>
    <div>
        <div>
            <label for="name">Name</label>
            <input type="text">
        </div>
        <div>
            <label for="description">Short description</label>
            <input type="text">
        </div>
        <div>
            <label for="img">Image of object</label>
            <input type="file">
        </div>
    </div>
</div> 
<!--CART-->
<div id="Cart" class="main-container tabcontent">
<div class="cart">
    <h1>Cart()</h1>
    <div>
        <p>Items</p>
        <div >
            <div style="display: flex;align-items: center; padding: 10px 0px 10px 0px; justify-content: space-between; max-width: 300px;">
                <div style="background-color: black; width: 50px; height: 50px;"></div>
                <div>book</div>
                <div>Price:Shs 10000</div>
                <div><button>X</button></div>
            </div>
        </div>
        <div>
            <button>Order</button>
            <button>Clear</button>
        </div>
    </div>
</div>
</div>
<!--sign up-->
</body>
<!--FOOTER-->
<footer>
    <div class="footer">
        <a href="">HELP CENTER</a>
        <a href="">CONTACT US</a>
        <a href=""> ABOUT US</a>
    </div>
    <div class="line"></div>
    <div class="footer">
        <p>&copy;Musi&middot;</p>
    </div>
</footer>
<script src="p.js"></script>
</html>