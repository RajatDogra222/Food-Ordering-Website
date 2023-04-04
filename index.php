<?php
$insert = false;
if(isset($_POST['btn'])){
  $server="localhost";
  $username="root";
  $password="";

  $con=mysqli_connect($server,$username,$password);

  if(!$con){
      die("connection to this database failed due to ". mysqli_connect_error());

  }
  // echo "connecte to the database:";

  $name= $_POST['name'];
  $email= $_POST['email'];
  $item= $_POST['item'];
  $quantity= $_POST['quantity'];
  
  $address= $_POST['address'];

  $sql="INSERT INTO `food_db`.`user` (`Name`, `Email`, `Item`, `Quantity`, `Address`, `dt`) VALUES ( '$name', '$email', '$item', '$quantity',  '$address', current_timestamp());";

  if($con->query($sql)==true){
      // echo "successfully inserted";
      $insert=true;
  }
  else{
      echo "ERROR: $sql <br> $con->error";
  }

  $con->close();

}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Food Ordering Website</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <nav class="navbar">
      <h1>foodofest</h1>
      <div class="nav-list">
        <a href="#" class="nav-link">Home</a>
        <a href="#meals" class="nav-link">Popular Meals</a>
        <a href="items.php"  class="nav-link">Items</a>
        <a href="#about us" class="nav-link">About Us</a>
        <a href="#form" class="nav-link">Order Now</a>
      </div>
    </nav>

    <div class="menu">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </div>
    <div class="container">
      <section class="section-1">
        <div class="banner-content">
          <h1 class="section-1-heading">welcome to <span>foodofest</span></h1>
          <p class="section-1-para">
            Want a delicious meal? but no time , we will provide you hot and
            yummy food of your choice.<br />
            Just eat and forget everything else.
          </p>
        </div>
      </section>
      <section class="section-2" id="meals">
        <h1 class="section-heading">Popular Meals</h1>
        <div class="item-wrapper">
          <div class="item">
            <img src="images/burger.jpg" alt="burger" />
            <h2>Burger</h2>
            <p>
              Served with special bread and garnished with unconventional
              toppings like grilled pineapple or crisp tortilla strips
            </p>
            <h2 class="price"><span>Rs.</span>150</h2>
            <a href="#form" class="btn-item">Order Now</a>
          </div>
          <div class="item">
            <img src="images/pizza.jpg" alt="Pizza" />
            <h2>Pizza</h2>
            <p>
              Delicious special pizza added with veggies like onion,corn 
              capsicum green/yellow,tomato and loads of real fresh mozzarella 
              cheese.
            </p>
            <h2 class="price"><span>Rs.</span>250</h2>
            <a href="#form" class="btn-item">Order Now</a>
          </div>
          <div class="item">
            <img src="images/pancakes.jpg" alt="Cup cakes" />
            <h2>Cup Cakes</h2>
            <p>
              Uses natural cocoa powder and buttermilk and topped with
              your favourite toppings available in every flavour of your
              choice.
            </p>
            <h2 class="price"><span>Rs.</span>120</h2>
            <a href="#form" class="btn-item">Order Now</a>
          </div>
          <div class="item">
            <img src="images/chicken.jpg" alt="Fried Chicken" />
            <h2>Fried Chicken</h2>
            <p>
              Topped with chilli like paprika,or hot sauce to give it a
              spicy taste.
            </p>
            <h2 class="price"><span>Rs.</span>260</h2>
            <a href="#form" class="btn-item">Order Now</a>
          </div>
          <div class="item">
            <img src="images/ice-cream.jpg" alt="Ice-cream" />
            <h2>Ice-Cream</h2>
            <p>
             Blended in cocoa powder in along with the eggs(optional),cream 
             ,vanilla and sugar.
            </p>
            <h2 class="price"><span>Rs.</span>150</h2>
            <a href="#form" class="btn-item">Order Now</a>
          </div>
          <div class="item">
            <img src="images/french fries.jpg" alt="French-Fries" />
            <h2>French-Fries</h2>
            <p>
             Baked varient ,oven chips ,uses less oil served with ketchup.
            </p>
            <h2 class="price"><span>Rs.</span>70</h2>
            <a href="#form" class="btn-item">Order Now</a>
          </div>
        </div>
      </section>
      <section class="section-3">
        <h1 class="section-heading" id="form">Order Now</h1>
        <?php
        if($insert==true){
        echo "<h1 class='submitpara'style='color:rgb(223, 172, 61); font-size:4rem;'> Your details have been successfully Registered.</h1>";
        }
       ?> 
        <div class="form-wrapper">
          
        <form class="form" action="#form" method="post">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required />
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required/>
            <label for="item">Item:</label>
            <input type="text" name="item" id="item" required/>
            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" id="quantity" required/>
            <label for="address">Address:</label>
            <textarea name="address" id="address" required></textarea>
            <button class="btn-order" id="btn" name ="btn">Order</button>
          </form>

        </div>
      </section>
      <section class="section-4" id="about us">
        <h1 class="section-heading">About Us</h1>
        <div class="content-container">
            <img src="images/about us.jpg" class="img-container" alt="about us" />
          <div class="content">
            <h1>Our Mission</h1>
            <p>
              Our core belief is that food connects people with each other and
              their cultures. We need this kind of ritual in our lives now more
              than ever. <p>We deeply believe that the primal act of cooking for
              each other and sharing food in our homes is part of our shared
              path to recovery and healing from current challenges.</p>
              <p>We hope to
              spark more exploration and creativity in the kitchen and help home
              cooks experience the immense joy of making and sharing meals with
              the people they love.
              </p>
            </p>

          </div>
        </div>
        <div class="email-sec">
          <p >For inquiries, please email us:
            <span>info@foodofest.com</span></p>
        </div>
        
      </section>

     
    </div>
    <footer class="footer">
      <p class="copyright">Copyright &copy; foodofest All Rights Reserved</p>
    </footer>

    <script src="script.js"></script>
  </body>
</html>
