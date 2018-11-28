<!DOCTYPE HTML>

<html>

<head>
  <meta charset="utf-8">
  <title>Vehicle Emporium</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" type="text/css" href="css/search.css">
  <link rel="stylesheet" href="css/general.css">
</head>

<body>

  <?php include 'header.php';?>

  <main>

    <div class="columnContainer">

      <section class="leftSidebar">
        <div class="custom-select">
          <select>
            <option value="0">Make:</option>
            <option value="1">Acura:</option>
            <option value="2">Aston Martin</option>
            <option value="3">Audi</option>
            <option value="4">Bentley</option>
            <option value="5">BMW</option>
            <option value="6">Bugatti</option>
            <option value="7">Buick</option>
            <option value="8">Cadillac</option>
            <option value="9">Chevrolet</option>
            <option value="10">Chrystler</option>
            <option value="11">Citroen</option>
            <option value="12">Dodge</option>
            <option value="13">Ferarri</option>
            <option value="14">Fiat</option>
            <option value="15">Ford</option>
            <option value="16">GMC</option>
            <option value="17">Honda</option>
            <option value="18">Hyundai</option>
            <option value="19">Infiniti</option>
            <option value="20">Jaguar</option>
            <option value="21">Jeep</option>
            <option value="22">Kia</option>
            <option value="23">Koenigsegg</option>
            <option value="24">Lamborghini</option>
            <option value="25">Land Rover</option>
            <option value="26">Lexus</option>
            <option value="27">Maserati</option>
            <option value="28">Mazda</option>
            <option value="29">McLaren</option>
            <option value="30">Mercedes-Benz</option>
            <option value="31">Mini</option>
            <option value="32">Mitsubishi</option>
            <option value="33">Nissan</option>
            <option value="34">Pagani</option>
            <option value="35">Peugeot</option>
            <option value="36">Porsche</option>
            <option value="37">Ram</option>
            <option value="38">Renault</option>
            <option value="39">Rolls Royce</option>
            <option value="40">Saab</option>
            <option value="41">Subaru</option>
            <option value="42">Suzuki</option>
            <option value="43">Tesla</option>
            <option value="44">Toyota</option>
            <option value="45">Volkswagen</option>
            <option value="46">Volvo</option>
          </select>

          <select>
            <option value="0">Model:</option>
          </select>

          <select>
            <option value="0">Year:</option>
          </select>

          <select>
            <option value="0">Type:</option>
            <option value="1">Coupe</option>
            <option value="2">Hatchback</option>
            <option value="3">Sedan</option>
            <option value="4">SUV</option>
            <option value="5">Truck</option>
            <option value="6">Other</option>
          </select>

          <select>
            <option value="0">Engine:</option>
            <option value="1">3-Cylinder</option>
            <option value="1">4-Cylinder</option>
            <option value="1">6-Cylinder</option>
            <option value="1">8-Cylinder</option>
            <option value="1">10-Cylinder</option>
            <option value="1">12-Cylinder</option>
            <option value="1">Electric</option>
            <option value="1">Rotary</option>
            <option value="1">Other</option>
          </select>

          <select>
            <option value="0">Drivetrain:</option>
            <option value="0">All-Wheel Drive</option>
            <option value="0">Four-Wheel Drive</option>
            <option value="0">Front-Wheel Drive</option>
            <option value="0">Read-Wheel Drive</option>
          </select>

          <select>
            <option value="0">Transmission:</option>
            <option value="1">Automatic</option>
            <option value="2">Manual</option>
          </select>

          <select>
            <option value="0">Colour:</option>
            <option value="1">Black</option>
            <option value="2">Blue</option>
            <option value="3">Brown</option>
            <option value="4">Green</option>
            <option value="5">Grey</option>
            <option value="6">Orange</option>
            <option value="7">Red</option>
            <option value="8">Silver</option>
            <option value="9">White</option>
            <option value="10">Yellow</option>
            <option value="11">Other</option>
          </select>

          <select>
            <option value="0">Seats:</option>
            <option value="1">2 seats</option>
            <option value="2">3 seats</option>
            <option value="3">4 seats</option>
            <option value="4">5 seats</option>
            <option value="5">6+  seats</option>
          </select>

          <select>
            <option value="0">Doors:</option>
            <option value="1">2-Door</option>
            <option value="2">3-Door</option>
            <option value="3">4-Door</option>
            <option value="4">Other</option>
          </select>

        </div>

      </section>

      <section class="mainView">
        <div class="titleEntry">
          <div class="titleCol leftCol">
            <h1>Search Results</h1>
          </div>
          <div class="titleCol middleCol">
            <div class="midTopFlex">
              <h2>Price:</h2>
              <h2>Mileage</h2>
              <h2>Location:</h2>
            </div>
          </div>
          <!-- <div class="titleCol rightCol">
            <h2>Purchase:</h2>
          </div> -->
        </div>

        <div class="searchEntry">
          <div class="searchCol leftCol">
            <div class="thumbContainer">
              <a href="product.html"><img src="images/bentleyThumb.jpg"></a>
            </div>
            <a href="product.html" class="searchLink">2018 Bentley Continental G3</a>
          </div>

          <div class="searchCol middleCol">
            <div class="midTopFlex">
              <div class="searchPrice">
                <p>$1,000,000</p>
              </div>
              <div class="searchMileage">
                <p>3,457km</p>
              </div>
              <div class="searchLocation">
                <p>London, England</p>
              </div>
            </div>
            <div class="searchDescription">
              <!-- <h2>Description</h2> -->
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam porta, diam ut malesuada pellentesque, tellus enim efficitur eros, in pharetra enim tellus id neque. Vestibulum aliquam finibus enim, ut eleifend quam egestas non.
                Quisque
                consequat consectetur elit. Vivamus dapibus dolor nec diam posuere, eget ornare nisl faucibus.</p>
            </div>
          </div>

          <div class="searchCol rightCol">
            <a href="cart.html" class="addToCart">ADD TO CARD</a>
            <div class="numberComments">
              <a href="product.html#prodComment" class="searchLink">2 Comments<img src="images/comment-bubble.png" class="commentBubble"></a>
            </div>
          </div>
        </div>

        <div class="searchEntry">
          <div class="searchCol leftCol">
            <div class="thumbContainer">
              <a href="product.html"><img src="images/singerTHumb.jpg"></a>
            </div>
            <a href="product.html" class="searchLink">1988 Porsche 911 Carrera Targa</a>
          </div>

          <div class="searchCol middleCol">
            <div class="midTopFlex">
              <div class="searchPrice">
                <p>$167,000</p>
              </div>
              <div class="searchMileage">
                <!-- <img id="test" src="images/odometer.png"> -->
                <p>35,859km</p>
              </div>
              <div class="searchLocation">
                <p>Berlin, Germany</p>
              </div>
            </div>
            <div class="searchDescription">
              <!-- <h2>Description</h2> -->
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam porta, diam ut malesuada pellentesque, tellus enim efficitur eros, in pharetra enim tellus id neque. Vestibulum aliquam finibus enim, ut eleifend quam egestas non.
                Quisque
                consequat consectetur elit. Vivamus dapibus dolor nec diam posuere, eget ornare nisl faucibus.</p>
            </div>
          </div>

          <div class="searchCol rightCol">
            <a href="cart.html" class="addToCart">ADD TO CARD</a>
            <div class="numberComments">
              <a href="product.html#prodComment" class="searchLink">7 Comments<img src="images/comment-bubble.png" class="commentBubble"></a>
            </div>
          </div>
        </div>

        <div class="searchEntry">
          <div class="searchCol leftCol">
            <div class="thumbContainer">
              <a href="product.html"><img src="images/rs5Thumb.jpg"></a>
            </div>
            <a href="product.html" class="searchLink">2017 Audi RS5</a>
          </div>

          <div class="searchCol middleCol">
            <div class="midTopFlex">
              <div class="searchPrice">
                <p>$70,875</p>
              </div>
              <div class="searchMileage">
                <p>12,589km</p>
              </div>
              <div class="searchLocation">
                <p>Vancouver, Canada</p>
              </div>
            </div>
            <div class="searchDescription">
              <h2>Description</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam porta, diam ut malesuada pellentesque, tellus enim efficitur eros, in pharetra enim tellus id neque. Vestibulum aliquam finibus enim, ut eleifend quam egestas non.
                Quisque
                consequat consectetur elit. Vivamus dapibus dolor nec diam posuere, eget ornare nisl faucibus.</p>
            </div>
          </div>

          <div class="searchCol rightCol">
            <a href="cart.html" class="addToCart">ADD TO CARD</a>
            <div class="numberComments">
              <a href="product.html#prodComment" class="searchLink">5 Comments<img src="images/comment-bubble.png" class="commentBubble"></a>
            </div>
          </div>
        </div>

        <div class="searchEntry">
          <div class="searchCol leftCol">
            <div class="thumbContainer">
              <a href="product.html"><img src="images/edoThumb.jpg"></a>
            </div>
            <a href="product.html" class="searchLink">2018 Mercedes AMG GTR</a>
          </div>

          <div class="searchCol middleCol">
            <div class="midTopFlex">
              <div class="searchPrice">
                <p>$228,164</p>
              </div>
              <div class="searchMileage">
                <p>1,867km</p>
              </div>
              <div class="searchLocation">
                <p>Shanghai, China</p>
              </div>
            </div>
            <div class="searchDescription">
              <h2>Description</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam porta, diam ut malesuada pellentesque, tellus enim efficitur eros, in pharetra enim tellus id neque. Vestibulum aliquam finibus enim, ut eleifend quam egestas non.
                Quisque
                consequat consectetur elit. Vivamus dapibus dolor nec diam posuere, eget ornare nisl faucibus.</p>
            </div>
          </div>

          <div class="searchCol rightCol">
            <a href="cart.html" class="addToCart">ADD TO CARD</a>
            <div class="numberComments">
              <a href="product.html#prodComment" class="searchLink">11 Comments<img src="images/comment-bubble.png" class="commentBubble"></a>
            </div>
          </div>
        </div>

      </section>
    </div>

    <?php include "footer.php" ?>

  </main>

</body>

</html>