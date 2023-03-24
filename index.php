<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> SparklyRose </title>
    <link rel="stylesheet" href="home.css">
</head>

<body>
    <!-- Top And Navigation -->
    <div id="top">
        <p>Free Shipping Overwide</p>
    </div>
    <div class="navbar">
        <img src="photos/logo.png" id="logo" class="navbarEl">
        <ul class="navbarEl">
            <li><a href="index.php">Home</a></li>
            <li><a href="product_info.html">Product Info</a></li>
            <li><a href="contact_us.html">Contact Us</a></li>
            <li><a href="track.html">Track</a></li>
        </ul>
        <button class="navbarEl" type="button"  onclick="openNav()"><img src="photos/cart.png"></button>
    </div>

    <!-- Background -->
    <div class="banner">
        <div class="content">
            <h1>Sparky Rose</h1>
            <p>Buy 2 - 5% off<br>Buy 3 - 10% off</p>
            <div>
                <a href="product_info.html"><button type="button" class="button"><span></span>Shop Now</button></a>
                <button type="button" class="button"><span></span>See More</button>
            </div>
        </div>
    </div>

    <!-- Product -->\
    <div class="product_home">
        <div class="product_info">
            <!-- Full-width images with number and caption text -->
            
            <div class="mySlides fade">
                <img src="photos/zolors.webp" style="width:100%">
                <div class="text">red wooden base</div>
            </div>
            <div class="mySlides fade">
                <img src="photos/zolors (5).webp" style="width:100%">
                <div class="text">red black base</div>
            </div>
            <div class="mySlides fade">
                <img src="photos/zolors (11).webp" style="width:100%">
                <div class="text">light wooden base</div>
            </div>
            <div class="mySlides fade">
                <img src="photos/zolors (10).webp" style="width:100%">
                <div class="text">light black base</div>
            </div>
            <div class="mySlides fade">
                <img src="photos/zolors (4).jpg" style="width:100%">
                <div class="text">pink wooden base</div>
            </div>
            <div class="mySlides fade">
                <img src="photos/zolors (1).webp" style="width:100%">
                <div class="text">pink black base</div>
            </div>
            <div class="mySlides fade">
                <img src="photos/zolors (2).webp" style="width:100%">
                <div class="text">purple wooden base</div>
            </div>
            <div class="mySlides fade">
                <img src="photos/zolors (1).jpg" style="width:100%">
                <div class="text">purple black base</div>
            </div>
            <div class="mySlides fade">
                <img src="photos/zolors.jpg" style="width:100%">
                <div class="text">white wooden base</div>
            </div>
            <div class="mySlides fade">
                <img src="photos/zolors (3).webp" style="width:100%">
                <div class="text">white black base</div>
            </div>
            <div class="mySlides fade">
                <img src="photos/zolors (9).webp" style="width:100%">
                <div class="text">blue wooden base</div>
            </div>
            <div class="mySlides fade">
                <img src="photos/zolors (6).webp" style="width:100%">
                <div class="text">blue black base</div>
            </div>
            <div class="mySlides fade">
                <img src="photos/zolors (8).webp" style="width:100%">
                <div class="text">golden wooden base</div>
            </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
            <div class="row">
                <div class="column">
                  <img class="demo cursor" src="photos/zolors.webp" style="width:100%" onclick="currentSlide(1)">
                </div>
                <div class="column">
                  <img class="demo cursor" src="photos/zolors (5).webp" style="width:100%" onclick="currentSlide(2)">
                </div>
                <div class="column">
                  <img class="demo cursor" src="photos/zolors (11).webp" style="width:100%" onclick="currentSlide(3)">
                </div>
                <div class="column">
                  <img class="demo cursor" src="photos/zolors (10).webp" style="width:100%" onclick="currentSlide(4)">
                </div>
                <div class="column">
                  <img class="demo cursor" src="photos/zolors (4).jpg" style="width:100%" onclick="currentSlide(5)">
                </div>
                <div class="column">
                  <img class="demo cursor" src="photos/zolors (1).webp" style="width:100%" onclick="currentSlide(6)">
                </div>
                <div class="column">
                  <img class="demo cursor" src="photos/zolors (2).webp" style="width:100%" onclick="currentSlide(7)">
                </div>
                <div class="column">
                  <img class="demo cursor" src="photos/zolors (1).jpg" style="width:100%" onclick="currentSlide(8)">
                </div>
                <div class="column">
                  <img class="demo cursor" src="photos/zolors.jpg" style="width:100%" onclick="currentSlide(9)">
                </div>
                <div class="column">
                  <img class="demo cursor" src="photos/zolors (3).webp" style="width:100%" onclick="currentSlide(10)">
                </div>
                <div class="column">
                  <img class="demo cursor" src="photos/zolors (9).webp" style="width:100%" onclick="currentSlide(11)">
                </div>
                <div class="column">
                  <img class="demo cursor" src="photos/zolors (6).webp" style="width:100%" onclick="currentSlide(12)">
                </div>
                <div class="column">
                  <img class="demo cursor" src="photos/zolors (8).webp" style="width:100%" onclick="currentSlide(13)">
                </div>
              </div>
        </div>
        <div class="product_info">
            <h1>Sparky Rose</h1><br>
            <h3>$42.39</h3><br>
            <label id="rcolor">Rose Color: red</label>
            <label id="bcolor" style="position:absolute; left: 51%;">Base Color: wooden</label>
            <form name="form">
                <select class="feat" name="color" onchange="getColor()">
                    <option>red</option>
                    <option>light</option>
                    <option>pink</option>
                    <option>purple</option>
                    <option>white</option>
                    <option>blue</option>
                    <option>golden</option>
                </select>
                <select class="feat" name="base" onchange="getColor()">
                    <option>wooden</option>
                    <option>black</option>
                </select><br>
                <button type="button" class="cart" onclick="openNav()">add to cart</button><br><br><br><br><br><br><br><br><br><br><br><br>
            </form>
        </div>
    </div>
    <br>
    <div class="marks">
        <div class="mark">
            <image src="photos/tag.png" style="width:7%">
            <br>
            <h4>Free Shipping</h4>
            <h5>We ship worldwide for free!</h5>
        </div>
        <div class="mark">
            <image src="photos/tag.png" style="width:7%">
            <br>
            <h4>A Large Variety</h4>
            <h5>Find the one most suitable for you!</h5>
        </div>
        <div class="mark">
            <image src="photos/tag.png" style="width:7%">
            <br>
            <h4>10,000+ Satisfied Customers</h4>
            <h5>Love helping you express your love!</h5>
        </div>
    </div>

	<h1>Reviews</h1>
	<div id="reviews">
    <?php
        // Connect to database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "sparkyrose";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Retrieve reviews from database
        $sql = "SELECT first_name,last_name, rating, review,upload_date FROM reviews";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<div class='review_con'>";
				echo "	<p><strong>{$row['first_name']} {$row['last_name']}:</strong></p>";
				echo "	<div class='rating'>";
				for($x = 0.5; $x<$row['rating']; $x++){
					echo "<img src='photos/star.png' class='star'>";
				}
				while($x<5){
					echo "<img src='photos/star_empty.png' class='star'>";
					$x++;
				}
				echo "	</div><br>";
				echo "	<p>{$row['review']}</p><br><br>";
				echo "	<p class='date'><em>{$row['upload_date']}</em></p>";
                echo "</div>";
            }
        } else {
            echo "No reviews found.";
        }

        $conn->close();
    ?>
	</div>
	<div class="add_review">
		<h2>Add Your Review</h2>
	</div>

    <h3 class="follow_on_sm">Follow us on social media!</h3>
    <div class="about_us">
        <div class="aqb">
            <h3>About Us</h3><br>
            <p>We ourselves are two close partners and we present<br>
                to you our variety of charming and magical roses to<br>
                express your love to your partner!<br><br>
                sparkofrose@gmail.com<br>
                0586881160
            </p>
        </div>
        <div class="aqb">
            <h3>Quick Links</h3><br>
            <a href="#">Search</a><br>
            <a href="#">Privacy Policy</a><br>
            <a href="#">Terms Of Sevice</a><br>
            <a href="#">Return Policy</a>
        </div>
        <div class="aqb">
            <h3>Become One Of Us</h3><br>
            <p>By subscribing you'll be one of the few to know about<br>new must-have products and receive discounts!</p><br>
            <form>
                <input type="text" placeholder="   First Name"><br><br>
                <input type="text" placeholder="   Email@gmail.com"><br><br>
                <input type="submit" style="height: 42px;">
            </form>
        </div>
    </div>

    <button onclick="scrollToTop()" id="myBtn" >^</button>

    <div id="mySidenav" class="sidebar">
        <div style="display:flex;">
            <h2 class="sidebar_text">Your Cart</h2>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        </div>
        <ul>
            <li><a href="#">D</a></li>
            <li><a href="#">D</a></li>
            <li><a href="#">D</a></li>
            <li><a href="#">D</a></li>
        </ul>
        <a href="checkout.html"><button style="position:absolute;bottom:20px;left:2.5%;width:95%;height:50px;border-radius:25px;cursor:pointer;">Check Out</button></a>
    </div>
</body>
<script src="script.js"></script>
</html>