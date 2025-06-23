<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chic&Trendy</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!----Navbar--->
    <nav class="navbar navbar-expand-lg navbar-dark" id="navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">CHIC&TRENDY</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"  aria-expanded="false" >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link" href="#Home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#About">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#ProductsCategories">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Contact">Contact</a>
              </li>
            </ul>
            <a href="signin.html" class="btn p-2 my-lg-0 my-2">Sign In</a>
            <a href="cart.html" class="btn p-2 my-lg-0 my-2">🛒</a>
        </div>
      </nav>

      <!----Home-->
      <section id="Home">
        <h1 class="text-center">Chic Collections</h1>
        <p>Where timeless fashion meets modern trends</p>
        <div class="input-group m-4">
            <input type="text" class="form-control" placeholder="Email Address">
            <button class="btn signin">Get Started</button>
        </div>
      </section>

      <!-----About-->
      <section id="About">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
              <img src="logo.jpg" class="img-fluid">
            </div>
            <div class="col-lg-6 col-md-6 col-12 p-lg-5 p-2 my-5">
              <h1> ABOUT US</h1>
              <p>Welcome to Chic&Trendy, where fashion meets elegance. Established in 2023, our boutique 
                has been dedicated to providing the latest trends and timeless pieces that cater to every 
                style and occasion. At Chic&Trendy, we believe that every individual deserves to feel confident
                and stylish, which is why we offer a carefully curated collection of dresses, from casual daywear 
                to stunning evening gowns.

                Our mission is to provide exceptional quality and personalized service, ensuring that every customer
                finds the perfect outfit that makes them look and feel their best. Our team of experienced fashion enthusiasts
                is always ready to offer styling advice and assistance, making your shopping experience enjoyable and effortless.
                
                Thank you for choosing Chic&Trendy. We look forward to helping you discover your unique style.</p>
            </div>
          </div>
        </div>
      </section>

      <!-----Products-->
      <section id="ProductsCategories" class="container my-5">
        <div class="container my-5">
            <h1 class="text-center mb-5">OUR PRODUCTS</h1>
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <div class="d-inline-block mx-2">
                        <a href="#SummerCollectionSection">
                            <img src="summer1.webp" class="img-fluid product-image" alt="Summer Collection">
                            <p class="category-button">Summer Collection</p>
                        </a>
                    </div>
                    <div class="d-inline-block mx-2">
                        <a href="#HolidayCollectionSection">
                            <img src="holiday.webp" alt="Holiday Collection" class="img-thumbnail">
                            <p class="category-button">Holiday Collection</p>
                        </a>
                    </div>
                    <div class="d-inline-block mx-2">
                        <a href="#WinterCollectionSection">
                            <img src="winter.webp" alt="Winter Collection" class="img-thumbnail">
                            <p class="category-button">Winter Collection</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Summer Collection Section -->
    <section id="SummerCollectionSection">
        <div class="container my-5">
            <h2 class="text-center mb-5">Summer Collection</h2>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="product text-center my-3">
                        <img src="sum1.webp" class="img-fluid product-image" alt="Summer Dress 1">
                        <p>White floral Sundress 1</p>
                        <input type="number" class="quantity" min="1" value="1">
                        <button class="add-to-cart" data-product="White floral Sundress 1" 
                        data-price="50" data-image="sum1.webp">Add to Cart</button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="product text-center my-3">
                        <img src="sum2.webp" class="img-fluid" alt="Summer Dress 2">
                        <p>Green Floral Sundress with Spaghetti Straps</p>
                        <input type="number" class="quantity" min="1" value="1">
                        <button class="add-to-cart" data-product="Green Floral Sundress with Spaghetti Straps" 
                        data-price="50">Add to Cart</button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="product text-center my-3">
                        <img src="sum3.webp" class="img-fluid" alt="Summer Dress 3">
                        <p>Kaftan</p>
                        <input type="number" class="quantity" min="1" value="1">
                        <button class="add-to-cart" data-product="Kaftan" 
                        data-price="50">Add to Cart</button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="product text-center my-3">
                        <img src="sum4.webp" class="img-fluid" alt="Summer Dress 4">
                        <p>Cascade Mini Dress</p>
                        <input type="number" class="quantity" min="1" value="1">
                        <button class="add-to-cart" data-product="Cascade Mini Dress" 
                        data-price="50">Add to Cart</button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="product text-center my-3">
                        <img src="sum5.webp" class="img-fluid" alt="Summer Dress 5">
                        <p>Pink Chanderi Dress</p>
                        <input type="number" class="quantity" min="1" value="1">
                        <button class="add-to-cart" data-product="Pink Chanderi Dress" 
                        data-price="50">Add to Cart</button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="product text-center my-3">
                        <img src="sum6.webp" class="img-fluid" alt="Summer Dress 6">
                        <p>Yellow Crepe Dress</p>
                        <input type="number" class="quantity" min="1" value="1">
                        <button class="add-to-cart" data-product="Yellow Crepe Dress" 
                        data-price="50">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Holiday Collection Section -->
    <section id="HolidayCollectionSection">
        <div class="container my-5">
            <h2 class="text-center mb-5">Holiday Collection</h2>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="product text-center my-3">
                        <img src="hol1.webp" class="img-fluid" alt="Holiday Dress 1">
                        <p>BLOOM MIDI DRESS</p>
                        <input type="number" class="quantity" min="1" value="1">
                        <button class="add-to-cart" data-product="BLOOM MIDI DRESS" 
                        data-price="60">Add to Cart</button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="product text-center my-3">
                        <img src="hol2.webp" class="img-fluid" alt="Holiday Dress 2">
                        <p>BRIGITTE MAXI DRESS</p>
                        <input type="number" class="quantity" min="1" value="1">
                        <button class="add-to-cart" data-product="BRIGITTE MAXI DRESS" 
                        data-price="60">Add to Cart</button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="product text-center my-3">
                        <img src="hol3.webp" class="img-fluid" alt="Holiday Dress 3">
                        <p>COLETTE DRESS</p>
                        <input type="number" class="quantity" min="1" value="1">
                        <button class="add-to-cart" data-product="COLETTE DRESS" 
                        data-price="60">Add to Cart</button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="product text-center my-3">
                        <img src="hol4.webp" class="img-fluid" alt="Holiday Dress 4">
                        <p>BOHEME MIDI DRESS</p>
                        <input type="number" class="quantity" min="1" value="1">
                        <button class="add-to-cart" data-product="BOHEME MIDI DRESS" 
                        data-price="60">Add to Cart</button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="product text-center my-3">
                        <img src="hol5.webp" class="img-fluid" alt="Holiday Dress 5">
                        <p>SKYLAR DRESS</p>
                        <input type="number" class="quantity" min="1" value="1">
                        <button class="add-to-cart" data-product="SKYLAR DRESS" 
                        data-price="60">Add to Cart</button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="product text-center my-3">
                        <img src="hol6.webp" class="img-fluid" alt="Holiday Dress 6">
                        <p>RAVEN DRESS</p>
                        <input type="number" class="quantity" min="1" value="1">
                        <button class="add-to-cart" data-product="RAVEN DRESS" 
                        data-price="60">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Winter Collection Section -->
    <section id="WinterCollectionSection">
        <div class="container my-5">
            <h2 class="text-center mb-5">Winter Collection</h2>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="product text-center my-3">
                        <img src="win1.webp" class="img-fluid" alt="Winter Dress 1">
                        <p>Red Sweater Dress</p>
                        <input type="number" class="quantity" min="1" value="1">
                        <button class="add-to-cart" data-product="Red Sweater Dress" 
                        data-price="70">Add to Cart</button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="product text-center my-3">
                        <img src="win2.webp" class="img-fluid" alt="Winter Dress 2">
                        <p>Black Long Coat</p>
                        <input type="number" class="quantity" min="1" value="1">
                        <button class="add-to-cart" data-product="Black Long Coat" 
                        data-price="70">Add to Cart</button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="product text-center my-3">
                        <img src="win3.webp" class="img-fluid" alt="Winter Dress 3">
                        <p>Cashmere Sweater</p>
                        <input type="number" class="quantity" min="1" value="1">
                        <button class="add-to-cart" data-product="Cashmere Sweater" 
                        data-price="70">Add to Cart</button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="product text-center my-3">
                        <img src="win4.webp" class="img-fluid" alt="Winter Dress 4">
                        <p>Fur Trimmed Jacket</p>
                        <input type="number" class="quantity" min="1" value="1">
                        <button class="add-to-cart" data-product="Fur Trimmed Jacket" 
                        data-price="70">Add to Cart</button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="product text-center my-3">
                        <img src="win5.webp" class="img-fluid" alt="Winter Dress 5">
                        <p>Leather Biker Jacket</p>
                        <input type="number" class="quantity" min="1" value="1">
                        <button class="add-to-cart" data-product="Leather Biker Jacket" 
                        data-price="70">Add to Cart</button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="product text-center my-3">
                        <img src="win6.webp" class="img-fluid" alt="Winter Dress 6">
                        <p>Wool Blend Coat</p>
                        <input type="number" class="quantity" min="1" value="1">
                        <button class="add-to-cart" data-product="Wool Blend Coat" 
                        data-price="70">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="Contact">
        <div class="container my-5">
            <h2 class="text-center mb-5">Contact Us</h2>
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-12">
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $name = htmlspecialchars($_POST['name']);
                        $email = htmlspecialchars($_POST['email']);
                        $message = htmlspecialchars($_POST['message']);
                        // Here you can add code to handle the form submission, like sending an email or saving to a database
                        echo "<p>Thank you, $name! Your message has been received.</p>";
                    }
                    ?>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-center py-4">
        <p> &copy; 2024 Chic&Trendy. All rights reserved. Designed by Chic&Trendy Team.</p>
    </footer>

    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
