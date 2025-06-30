
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ecommerce By H</title>
    <!--Link to fontawesome cdn website to get some icons-->
    <script
      src="https://kit.fontawesome.com/89c74d5bb8.js"
      crossorigin="anonymous"
    ></script>
    <!--Link to style sheet-->
    <link rel="stylesheet" href="style.css" />
    <!--Link to javascript-->
    <script src="script.js" defer></script>
    <!--defer keyword is used to specify that a script should be executed-->
    <!--after the page has loaded-->
  </head>
  <body>
    <!--Header Section Contain Logo And Navigation Bar-->
    <!--logo part-->
    <section id="header">
      <a href="#"><img src="img/logo.png" class="logo" alt="" /></a>
      <!--Search bar-->
      <div class="form1">
        <input type="text" id="search-input" placeholder="Search..." />
        <button class="normal">
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>
      </div>
      <!--Creating Nav Bar-->
      <div>
        <ul id="navbar">
          <li><a class="active" href="index.html">Home</a></li>
          <li><a href="shop.html">Shop</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="contact.html">Contact</a></li>
          <!--Using fontawesome icons to put BAG or CART icon-->
          <li id="lg-bag">
            <a href="cart.html"
              ><i class="fa-solid fa-bag-shopping" style="color: #b197fc"></i
            ></a>
          </li>
          <!--adding close will be only visible in medium side devices navbar-->
          <a href="#" id="close"
            ><i class="fa-solid fa-xmark" style="color: #ff0000"></i
          ></a>
        </ul>
      </div>
      <div id="mobile">
        <a href="cart.html"
          ><i class="fa-solid fa-bag-shopping" style="color: #b197fc"></i
        ></a>
        <i id="bar" class="fa-solid fa-outdent" style="color: #b197fc"></i>
      </div>
    </section>

    <section id="hero">
      <h4>Trade-in-offer</h4>
      <h2>Super Value deals</h2>
      <h1>On all Products</h1>
      <p>Save more with coupons & up to 70% off!</p>
      <button><a href="#product1"> Shop Now</a></button>
    </section>

    <section id="feature" class="section-p1">
      <!--section p1 adds some padding around our feature section-->
      <div class="fe-box">
        <!--Feature box-->
        <img src="img/features/f1.png" alt="" />
        <h6>Free Shipping</h6>
      </div>
      <div class="fe-box">
        <!--Feature box-->
        <img src="img/features/f2.png" alt="" />
        <h6>Online Order</h6>
      </div>
      <div class="fe-box">
        <!--Feature box-->
        <img src="img/features/f3.png" alt="" />
        <h6>Save Money</h6>
      </div>
      <div class="fe-box">
        <!--Feature box-->
        <img src="img/features/f4.png" alt="" />
        <h6>Promotions</h6>
      </div>
      <div class="fe-box">
        <!--Feature box-->
        <img src="img/features/f5.png" alt="" />
        <h6>Happy Sell</h6>
      </div>
      <div class="fe-box">
        <!--Feature box-->
        <img src="img/features/f6.png" alt="" />
        <h6>F24/7 Support</h6>
      </div>
    </section>

    <section id="product1" class="section-p1">
      <!--section p1 adds some padding around our feature section-->
      <h2>Featured Product</h2>
      <p>Summer Collection New Modern Design</p>
      <!--Product Container-->
      <div class="pro-container">
        <!--Product-->
        <div class="pro">
          <img src="img/products/f1.jpg" alt="" />
          <!--Description-->
          <div class="des">
            <!--Brand-->
            <span>adidas</span>
            <h5>Cartoon Astronaut T-Shirts</h5>
            <div class="star">
              <!--getting stars from font awesome -->
              <input type="radio" name="rating1" id="rating1" />
              <label for="rating1" class="fas fa-star"></label>
              <input type="radio" name="rating1" id="rating2" />
              <label for="rating2" class="fas fa-star"></label>
              <input type="radio" name="rating1" id="rating3" />
              <label for="rating3" class="fas fa-star"></label>
              <input type="radio" name="rating1" id="rating4" />
              <label for="rating4" class="fas fa-star"></label>
              <input type="radio" name="rating1" id="rating5" />
              <label for="rating5" class="fas fa-star"></label>
            </div>
            <!--Price-->
            <h4>$78</h4>
          </div>
          <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a
          ><!--cart is other class name-->
        </div>
        <div class="pro">
          <img src="img/products/f2.jpg" alt="" />
          <!--Description-->
          <div class="des">
            <!--Brand-->
            <span>adidas</span>
            <h5>Jasmine Astronaut T-Shirts</h5>
            <div class="star">
              <!--getting stars from font awesome -->
              <input type="radio" name="rating6" id="rating6" />
              <label for="rating6" class="fas fa-star"></label>
              <input type="radio" name="rating6" id="rating7" />
              <label for="rating7" class="fas fa-star"></label>
              <input type="radio" name="rating6" id="rating8" />
              <label for="rating8" class="fas fa-star"></label>
              <input type="radio" name="rating6" id="rating9" />
              <label for="rating9" class="fas fa-star"></label>
              <input type="radio" name="rating6" id="rating10" />
              <label for="rating10" class="fas fa-star"></label>
            </div>
            <!--Price-->
            <h4>$92</h4>
          </div>
          <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a
          ><!--cart is other class name-->
        </div>
        <div class="pro">
          <img src="img/products/f3.jpg" alt="" />
          <!--Description-->
          <div class="des">
            <!--Brand-->
            <span>adidas</span>
            <h5>Garden Astronaut T-Shirts</h5>
            <div class="star">
              <!--getting stars from font awesome -->
              <input type="radio" name="rating11" id="rating11" />
              <label for="rating11" class="fas fa-star"></label>
              <input type="radio" name="rating11" id="rating12" />
              <label for="rating12" class="fas fa-star"></label>
              <input type="radio" name="rating11" id="rating13" />
              <label for="rating13" class="fas fa-star"></label>
              <input type="radio" name="rating11" id="rating14" />
              <label for="rating14" class="fas fa-star"></label>
              <input type="radio" name="rating11" id="rating15" />
              <label for="rating15" class="fas fa-star"></label>
            </div>
            <!--Price-->
            <h4>$64</h4>
          </div>
          <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a
          ><!--cart is other class name-->
        </div>
        <div class="pro">
          <img src="img/products/f4.jpg" alt="" />
          <!--Description-->
          <div class="des">
            <!--Brand-->
            <span>adidas</span>
            <h5>Spring Astronaut T-Shirts</h5>
            <div class="star">
              <!--getting stars from font awesome -->
              <input type="radio" name="rating16" id="rating16" />
              <label for="rating16" class="fas fa-star"></label>
              <input type="radio" name="rating16" id="rating17" />
              <label for="rating17" class="fas fa-star"></label>
              <input type="radio" name="rating16" id="rating18" />
              <label for="rating18" class="fas fa-star"></label>
              <input type="radio" name="rating16" id="rating19" />
              <label for="rating19" class="fas fa-star"></label>
              <input type="radio" name="rating16" id="rating20" />
              <label for="rating20" class="fas fa-star"></label>
            </div>
            <!--Price-->
            <h4>$98</h4>
          </div>
          <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a
          ><!--cart is other class name-->
        </div>
        <div class="pro">
          <img src="img/products/f5.jpg" alt="" />
          <!--Description-->
          <div class="des">
            <!--Brand-->
            <span>adidas</span>
            <h5>Flower Astronaut T-Shirts</h5>
            <div class="star">
              <!--getting stars from font awesome -->
              <!--getting stars from font awesome -->
              <input type="radio" name="rating21" id="rating21" />
              <label for="rating21" class="fas fa-star"></label>
              <input type="radio" name="rating21" id="rating22" />
              <label for="rating22" class="fas fa-star"></label>
              <input type="radio" name="rating21" id="rating23" />
              <label for="rating23" class="fas fa-star"></label>
              <input type="radio" name="rating21" id="rating24" />
              <label for="rating24" class="fas fa-star"></label>
              <input type="radio" name="rating21" id="rating25" />
              <label for="rating25" class="fas fa-star"></label>
            </div>
            <!--Price-->
            <h4>$56</h4>
          </div>
          <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a
          ><!--cart is other class name-->
        </div>
        <div class="pro">
          <img src="img/products/f6.jpg" alt="" />
          <!--Description-->
          <div class="des">
            <!--Brand-->
            <span>adidas</span>
            <h5>Fancy Astronaut Shirts</h5>
            <div class="star">
              <!--getting stars from font awesome -->
              <input type="radio" name="rating26" id="rating26" />
              <label for="rating26" class="fas fa-star"></label>
              <input type="radio" name="rating26" id="rating27" />
              <label for="rating27" class="fas fa-star"></label>
              <input type="radio" name="rating26" id="rating28" />
              <label for="rating28" class="fas fa-star"></label>
              <input type="radio" name="rating26" id="rating29" />
              <label for="rating29" class="fas fa-star"></label>
              <input type="radio" name="rating26" id="rating30" />
              <label for="rating30" class="fas fa-star"></label>
            </div>
            <!--Price-->
            <h4>$83</h4>
          </div>
          <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a
          ><!--cart is other class name-->
        </div>
        <div class="pro">
          <img src="img/products/f7.jpg" alt="" />
          <!--Description-->
          <div class="des">
            <!--Brand-->
            <span>adidas</span>
            <h5>Cartoon Astronaut Pants</h5>
            <div class="star">
              <!--getting stars from font awesome -->
              <input type="radio" name="rating31" id="rating31" />
              <label for="rating31" class="fas fa-star"></label>
              <input type="radio" name="rating31" id="rating32" />
              <label for="rating32" class="fas fa-star"></label>
              <input type="radio" name="rating31" id="rating33" />
              <label for="rating33" class="fas fa-star"></label>
              <input type="radio" name="rating31" id="rating34" />
              <label for="rating34" class="fas fa-star"></label>
              <input type="radio" name="rating31" id="rating35" />
              <label for="rating35" class="fas fa-star"></label>
            </div>
            <!--Price-->
            <h4>$69</h4>
          </div>
          <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a
          ><!--cart is other class name-->
        </div>
        <div class="pro">
          <img src="img/products/f8.jpg" alt="" />
          <!--Description-->
          <div class="des">
            <!--Brand-->
            <span>adidas</span>
            <h5>Cartoon Kittens Shirts</h5>
            <div class="star">
              <!--getting stars from font awesome -->
              <input type="radio" name="rating36" id="rating36" />
              <label for="rating36" class="fas fa-star"></label>
              <input type="radio" name="rating36" id="rating37" />
              <label for="rating37" class="fas fa-star"></label>
              <input type="radio" name="rating36" id="rating38" />
              <label for="rating38" class="fas fa-star"></label>
              <input type="radio" name="rating36" id="rating39" />
              <label for="rating39" class="fas fa-star"></label>
              <input type="radio" name="rating36" id="rating40" />
              <label for="rating40" class="fas fa-star"></label>
            </div>
            <!--Price-->
            <h4>$88</h4>
          </div>
          <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a
          ><!--cart is other class name-->
        </div>
      </div>
    </section>

    <section id="banner" class="section-m1">
      <!--Section m1 adds some spacing at top and button of this section-->
      <h4>Repair Services</h4>
      <h2>Up to <span>70% Off</span> - All t-Shirts & Accessories</h2>
      <button class="normal">Explore More</button>
    </section>


    <section id="product1" class="section-p1">
        <h2>Featured Product</h2>
        <p>Summer Collection New Modern Design</p>
        <div class="pro-container" id="products">
            <?php
            // PHP code to fetch products from the database and generate HTML
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "h-e-commerce"; 

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // SQL query to fetch products
            $sql = "SELECT * FROM products";
            $result = $conn->query($sql);

            // Display products
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<div class="pro">';
                    echo '<img src="' . $row['image_url'] . '" alt="" />';
                    echo '<div class="des">';
                    echo '<span>' . $row['brand'] . '</span>';
                    echo '<h5>' . $row['name'] . '</h5>';
                    echo '<div class="star">';
                    for ($i = 1; $i <= 5; $i++) {
                        echo '<input type="radio" name="rating' . $row['id'] . '" id="rating' . $row['id'] . '_' . $i . '"';
                        if ($row['rating'] >= $i) {
                            echo ' checked';
                        }
                        echo ' />';
                        echo '<label for="rating' . $row['id'] . '_' . $i . '" class="fas fa-star"></label>';
                    }
                    echo '</div>';
                    echo '<h4>$' . $row['price'] . '</h4>';
                    echo '</div>';
                    echo '<a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>';
                    echo '</div>';
                }
            } else {
                echo "No products found.";
            }
            $conn->close();
            ?>
        </div>
    </section>


    <section id="sm-banner" class="section-p1">
      <!--Smaller-banner-->
      <!--section p1 adds some padding around our sm-banner section-->
      <div class="banner-box">
        <h4>crazy deals</h4>
        <h2>buy 1 get 1 free</h2>
        <span>The best classic dress is on sale at H</span>
        <button class="white">Explore More</button>
      </div>
      <div class="banner-box banner-box2">
        <h4>spring/summer</h4>
        <h2>upcoming season</h2>
        <span>The best cool shirts is on sale at H</span>
        <button class="white">Collection</button>
      </div>
    </section>

    <section id="banner3">
      <div class="banner-box">
        <h2>SEASONAL SALE</h2>
        <h3>Winter Collection-50% OFF</h3>
      </div>
      <div class="banner-box banner-box2">
        <h2>NEW FOOTWARE COLLECTION</h2>
        <h3>Spring/Summer 2023</h3>
      </div>
      <div class="banner-box banner-box3">
        <h2>T-Shirts</h2>
        <h3>New Trendy Prints</h3>
      </div>
    </section>

    <section id="newsletter" class="section-p1 section-m1">
      <div class="newstext">
        <h4>Sign Up For Newsletters</h4>
        <p>
          Get E-mail Updates About Our Latest Shop And
          <span>Special Offers.</span>
        </p>
      </div>
      <div class="form">
        <input type="text" placeholder="Your email address" />
        <button class="normal"><a href="Signin_out.html">Sign Up</a></button>
      </div>
    </section>

    <footer class="section-p1">
      <div class="col">
        <img class="logo" src="img/logo.png" alt="" />
        <h4>Contact</h4>
        <p>
          <strong> Address:</strong> 4294 Michel Abi Chahla, Moussaitbeh, Beirut
        </p>
        <p><strong> Phone:</strong> +961 1 706 881</p>
        <p><strong> Hours:</strong>10:00 -18:00 Mon-Sat</p>
        <div class="follow">
          <h4>Follow Us</h4>
          <div class="icon">
            <a href="https://www.facebook.com/profile.php?id=61559123456245"
              ><i class="fa-brands fa-facebook"></i
            ></a>
            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
            <a href="https://www.instagram.com/hellow_shoppin/"
              ><i class="fa-brands fa-instagram"></i
            ></a>
            <a href="#"><i class="fa-brands fa-pinterest"></i></a>
            <a href="#"><i class="fa-brands fa-youtube"></i></a>
          </div>
        </div>
      </div>
      <div class="col">
        <h4>About</h4>
        <a href="#">About Us</a>
        <a href="#">Delivery Information</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms & Conditions</a>
        <a href="#">Contact Us</a>
      </div>
      <div class="col">
        <h4>My Account</h4>
        <a href="#">Sign In</a>
        <a href="#">View Cart</a>
        <a href="#">My Wishist</a>
        <a href="#">Track My Order</a>
        <a href="#">Help</a>
      </div>
      <div class="col install">
        <h4>Install App</h4>
        <p>From App Store or Google Play</p>
        <div class="row">
          <img src="img/pay/app.jpg" alt="" />
          <img src="img/pay/play.jpg" alt="" />
        </div>
        <p>Secured Payment Gateways</p>
        <img src="img/pay/pay.png" alt="" />
      </div>
      <br />
      <div class="copyright">
        <p>&copy H page by Hiba for Hellow Shopping 2024</p>
      </div>
    </footer>

  </body>
</html>

