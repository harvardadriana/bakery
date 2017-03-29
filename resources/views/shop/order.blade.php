@extends('layouts.master')

@section('title')

    Piece of Heaven Bakery - Shop online
    
@endsection

@push('head')

    <link href="css/menu.css" rel="stylesheet" />
    
@endpush

@section('main')

    <main>
        
        <!-- SIDE NAVIGATION -->
        <div id="side-menu" class="left">
            <h2>Side navigation</h2>
            <ul>
                <li id="navpart1"><a href="sweets.html"><span class="upper">Sweets</span></a>
                    <ul>
                        <li id="navpart2"><a href="cakes.html">Cakes</a></li>
                        <li id="navpart3"><a href="#">Cupcakes</a></li>
                        <li id="navpart4"><a href="#">Pies</a></li>
                        <li id="navpart5"><a href="#">Cookies</a></li>
                        <li id="navpart6"><a href="#">Ice cream cakes</a></li>
                    </ul>
                </li>
                <li id="navpart7"><a href="snacks.html"><span class="upper">Snacks</span></a>
                    <ul>
                        <li id="navpart8"><a href="ciabatta.html">Ciabatta</a></li>
                        <li id="navpart9"><a href="tunamelt.html">Tuna melt</a></li>
                        <li id="navpart10"><a href="chickenwrap.html">Chicken wrap</a></li>
                    </ul>
                </li>
                <li id="navpart11"><a href="others.html"><span class="upper">Others</span></a>
                    <ul>
                        <li id="navpart12"><a href="breads.html">Breads</a></li>
                        <li id="navpart13"><a href="pizzas.html">Pizzas</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <!-- CAKE GALLERY -->
        <div id="food-gallery" class="gallery right">
            <h1>Our Cakes</h1>
            <ul>
                <li><a href="images/sweets/cakes/cake1.jpg" data-lightbox="cakes" data-title="Black Forest: layers of chocolate sponge cake with cherries, whipped cream, and more chocolate"><img src="images/sweets/cakes/thumb/cake1-small.jpg" alt="Chocolate cake" /></a></li>
                <li><a href="images/sweets/cakes/cake2.jpg" data-lightbox="cakes" data-title="Coconut Cake: cake with filling of coconuts and pineapple cream"><img src="images/sweets/cakes/thumb/cake2-small.jpg" alt="Another cake" /></a></li>
                <li><a href="images/sweets/cakes/cake3.jpg" data-lightbox="cakes" data-title="Oreo Cake: lots of oreo cookies, choc, and cherries"><img src="images/sweets/cakes/thumb/cake3-small.jpg" alt="Another cake" /></a></li>
                <li><a href="images/sweets/cakes/cake4.jpg" data-lightbox="cakes" data-title="Mushroom Cake: a cake with a bunch of mushrooms"><img src="images/sweets/cakes/thumb/cake4-small.jpg" alt="Another cake" /></a></li>
                <li><a href="images/sweets/cakes/cake5.jpg" data-lightbox="cakes" data-title="Choc Cherry Delight: chocolate and cherries"><img src="images/sweets/cakes/thumb/cake5-small.jpg" alt="Another cake" /></a></li>
                <li><a href="images/sweets/cakes/cake6.jpg" data-lightbox="cakes" data-title="Cherry Chocolate Cake: old-fashioned cherry chocolate cake"><img src="images/sweets/cakes/thumb/cake6-small.jpg" alt="Another cake" /></a></li>
                <li><a href="images/sweets/cakes/cake7.jpg" data-lightbox="cakes" data-title="Piece of Heaven Cake: our favorite"><img src="images/sweets/cakes/thumb/cake7-small.jpg" alt="One more cake" /></a></li>
                <li><a href="images/sweets/cakes/cake8.jpg" data-lightbox="cakes" data-title="Caramel Mud Cake: delicious caramel cake with some toppings on it!"><img src="images/sweets/cakes/thumb/cake8-small.jpg" alt="Another cake" /></a></li>
                <li><a href="images/sweets/cakes/cake9.jpg" data-lightbox="cakes" data-title="Another Chocolate Cake: pure and simple chocolate cake"><img src="images/sweets/cakes/thumb/cake9-small.jpg" alt="Last cake" /></a></li>
            </ul>
        </div>

    </main>

@endsection
