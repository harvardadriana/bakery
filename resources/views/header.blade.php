<header>
    <div id="logo">
        <h1>Piece of Heaven Bakery</h1>
        <h2>Since 1965</h2>
    </div>

    <!-- NAVIGATION MENU -->
    <nav>
        <h3>Site navigation</h3>
        <ul>

            @if(Auth::check())

                <li class="navhome"><a href="/" title="Home">Home</a></li>
                <li class="navmenu"><a href="/menu/sweets" title="Menu">Menu</a>
                    <ul>
                        <!-- second level menu - cakes -->
                        <li><a href="/menu/sweets" title="Sweets">Sweets</a>
                            <ul>
                                <li><a href="/menu/sweets" title="Cakes">Cakes</a></li>
                                <li><a href="/menu/sweets" title="Cupcakes">Cupcakes</a></li>
                                <li><a href="/menu/sweets" title="Pies">Pies</a></li>
                                <li><a href="/menu/sweets" title="Cookies">Cookies</a></li>
                                <li><a href="/menu/sweets" title="Ice cream cakes">Ice cream cakes</a></li>
                            </ul>
                        </li>
                        <!-- second level menu - snacks -->
                        <li><a href="/menu/snacks" title="Snacks">Snacks</a>
                            <ul>
                                <li><a href="/menu/snacks" title="Ciabatta">Ciabatta</a></li>
                                <li><a href="/menu/snacks" title="Tuna melt">Tuna melt</a></li>
                                <li><a href="/menu/snacks" title="Chicken wrap">Chicken wrap</a></li>
                            </ul>
                        </li>
                        <!-- second level menu - others -->
                        <li><a href="/menu/others" title="Others">Others</a>
                            <ul>
                                <li><a href="/menu/others" title="Breads">Breads</a></li>
                                <li><a href="/menu/others" title="Pizzas">Pizzas</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="navorders"><a href="/orders" title="Orders">Orders</a></li>
                <li class="navprofile"><a href="/profile/edit" title="Profile">Profile</a></li>
                <li class="navlogout">
                    <form method='POST' id='logout' action='/logout'>
                        {{csrf_field()}}
                        <a href='#' onClick='document.getElementById("logout").submit();'>Logout</a>
                    </form>
                </li>

            @else

                <li class="navhome"><a href="/" title="Home">Home</a></li>
                <li class="navmenu"><a href="/menu/sweets" title="Menu">Menu</a>
                    <ul>
                        <!-- second level menu - cakes -->
                        <li><a href="/menu/sweets" title="Sweets">Sweets</a>
                            <ul>
                                <li><a href="/menu/sweets" title="Cakes">Cakes</a></li>
                                <li><a href="/menu/sweets" title="Cupcakes">Cupcakes</a></li>
                                <li><a href="/menu/sweets" title="Pies">Pies</a></li>
                                <li><a href="/menu/sweets" title="Cookies">Cookies</a></li>
                                <li><a href="/menu/sweets" title="Ice cream cakes">Ice cream cakes</a></li>
                            </ul>
                        </li>
                        <!-- second level menu - snacks -->
                        <li><a href="/menu/snacks" title="Snacks">Snacks</a>
                            <ul>
                                <li><a href="/menu/snacks" title="Ciabatta">Ciabatta</a></li>
                                <li><a href="/menu/snacks" title="Tuna melt">Tuna melt</a></li>
                                <li><a href="/menu/snacks" title="Chicken wrap">Chicken wrap</a></li>
                            </ul>
                        </li>
                        <!-- second level menu - others -->
                        <li><a href="/menu/others" title="Others">Others</a>
                            <ul>
                                <li><a href="/menu/others" title="Breads">Breads</a></li>
                                <li><a href="/menu/others" title="Pizzas">Pizzas</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="navcontact"><a href="/contact" title="Contact us">Contact us</a></li>
                <li class="navregister"><a href="/register" title="Register">Register</a></li>
                <li class="navlogin"><a href="/login" title="Login">Login</a></li>
                
            @endif

        </ul>
    </nav>
</header>