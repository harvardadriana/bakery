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
                <li class="navmenu"><a href="/menu" title="Menu">Menu</a>
                    <ul>
                        <!-- second level menu - cakes -->
                        <li><a href="/menu" title="Sweets">Sweets</a>
                            <ul>
                                <li><a href="/menu" title="Cakes">Cakes</a></li>
                                <li><a href="/menu" title="Cupcakes">Cupcakes</a></li>
                                <li><a href="/menu" title="Pies">Pies</a></li>
                                <li><a href="/menu" title="Cookies">Cookies</a></li>
                                <li><a href="/menu" title="Ice cream cakes">Ice cream cakes</a></li>
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
                <li class="navmenu"><a href="/menu" title="Menu">Menu</a>
                    <ul>
                        <!-- second level menu - cakes -->
                        <li><a href="/menu" title="Sweets">Sweets</a>
                            <ul>
                                <li><a href="/menu" title="Cakes">Cakes</a></li>
                                <li><a href="/menu" title="Cupcakes">Cupcakes</a></li>
                                <li><a href="/menu" title="Pies">Pies</a></li>
                                <li><a href="/menu" title="Cookies">Cookies</a></li>
                                <li><a href="/menu" title="Ice cream cakes">Ice cream cakes</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="navstores"><a href="/stores" title="Stores">Stores</a></li>
                <li class="navregister"><a href="/register" title="Register">Register</a></li>
                <li class="navlogin"><a href="/login" title="Login">Login</a></li>
                
            @endif

        </ul>
    </nav>
</header>