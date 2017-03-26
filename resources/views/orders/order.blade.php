<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
    <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="Piece of Heaven Bakery, specialized in cakes, cupcakes, snacks, and cakes for special ocasions" />
        <title>Piece of Heaven Bakery - Homepage</title>
        <!-- HTML5 browser support -->
        <!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- Google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Henny+Penny" rel="stylesheet" />
        <!-- my reset css -->   
        <link href="css/reset.css" rel="stylesheet" />
        <!-- lightbox css -->
        <link href="css/lightbox.min.css" rel="stylesheet" />
        <!-- my styles -->
        <link href="css/globalstyles.css" rel="stylesheet" />
        <link href="css/index.css" rel="stylesheet" />  
    </head>
    <body class="home">

        <header>
            <div id="logo">
                <h1>Piece of Heaven Bakery</h1>
                <h2>Since 1965</h2>
            </div>

            <!-- NAVIGATION MENU -->
            <nav>
                <h3>Site navigation</h3>
                <ul>
                    <li class="navhome"><a href="index.html" title="Home">Home</a></li>
                    <li class="navmenu"><a href="#" title="Menu">Menu</a>
                        <ul>
                            <!-- second level menu - cakes -->
                            <li><a href="sweets.html" title="Sweets">Sweets</a>
                                <ul>
                                    <li><a href="cakes.html" title="Cakes">Cakes</a></li>
                                    <li><a href="#" title="Cupcakes">Cupcakes</a></li>
                                    <li><a href="#" title="Pies">Pies</a></li>
                                    <li><a href="#" title="Cookies">Cookies</a></li>
                                    <li><a href="#" title="Ice cream cakes">Ice cream cakes</a></li>
                                </ul>
                            </li>
                            <!-- second level menu - snacks -->
                            <li><a href="snacks.html" title="Snacks">Snacks</a>
                                <ul>
                                    <li><a href="ciabatta.html" title="Ciabatta">Ciabatta</a></li>
                                    <li><a href="tunamelt.html" title="Tuna melt">Tuna melt</a></li>
                                    <li><a href="chickenwrap.html" title="Chicken wrap">Chicken wrap</a></li>
                                </ul>
                            </li>
                            <!-- second level menu - others -->
                            <li><a href="others.html" title="Others">Others</a>
                                <ul>
                                    <li><a href="breads.html" title="Breads">Breads</a></li>
                                    <li><a href="pizzas.html" title="Pizzas">Pizzas</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="navocasions"><a href="order.html" title="Order">Special Ocasions</a></li>
                    <li class="navstores"><a href="stores.html" title="Stores">Stores</a></li>
                    <li class="navcontactus"><a href="contactus.html" title="Contact us">Contact us</a></li>
                </ul>
            </nav>
        </header>

        <main>

            <!-- IMAGE SLIDER -->
            <div id="imageSlider">
                <ul>
                    <li class=""><img src="images/homepage/slider/homepage-slider1.jpg" alt="Cakes Display" /></li>
                    <li class="hide"><img src="images/homepage/slider/homepage-slider2.jpg" alt="Cupcakes Display" /></li>
                    <li class="hide"><img src="images/homepage/slider/homepage-slider3.jpg" alt="Sliced Cake" /></li>
                </ul>
            </div>

            <figure id="fig1">
                <img src="images/homepage/figure/cake.jpg" alt="cakes" title="Cakes" />
                <figcaption><a href="cakes.html" title="Cakes">Cakes</a></figcaption>
            </figure>

            <figure id="fig2">
                <img src="images/homepage/figure/cupcakes.jpg" alt="cupcakes" title="Cupcakes" />
                <figcaption>Cupcakes</figcaption>
            </figure>

            <figure id="fig3">
                <img src="images/homepage/figure/applepie.jpg" alt="pies" title="Pies" />
                <figcaption>Pies</figcaption>
            </figure>

            <figure id="fig4">
                <img src="images/homepage/figure/snacks.jpg" alt="snacks" title="Snacks" />
                <figcaption><a href="snacks.html" title="Snacks">Snacks</a></figcaption>
            </figure>

        </main>

        <footer>
            <p>Copyright &copy; <!-- <?php echo date("Y"); ?> --> Adriana Rossetti</p>
        </footer>

        <!-- GENERAL SCRIPTS -->
        <!-- lightbox and jQuery -->
        <script src="js/lightbox-plus-jquery.min.js"></script>
        <!-- my scripts -->
        <script src="js/scripts.js"></script>

        <!-- SCRIPTS RELEVANT FOR THIS PAGE ONLY -->
        <script src="js/index.js"></script>

    </body>
</html>
