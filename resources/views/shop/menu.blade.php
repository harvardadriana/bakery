@extends('layouts.master')

@section('title')

    Piece of Heaven Bakery - Shop online
    
@endsection

@push('head')

    <link href="/css/menu.css" rel="stylesheet" />
    
@endpush

@section('main')

    <main>
        
        <!-- SIDE NAVIGATION -->
        <div id="side-menu" class="left">
            <h2>Side navigation</h2>
            <ul>
                <li id="navpart1"><a href="/sweets"><span class="upper">Sweets</span></a>
                    <ul>
                        <li id="navpart2"><a href="/cakes">Cakes</a></li>
                        <li id="navpart3"><a href="/cupcakes">Cupcakes</a></li>
                        <li id="navpart4"><a href="/pies">Pies</a></li>
                        <li id="navpart5"><a href="/cookies">Cookies</a></li>
                        <li id="navpart6"><a href="/icecreamcakes">Ice cream cakes</a></li>
                    </ul>
                </li>
                <li id="navpart7"><a href="/snacks"><span class="upper">Snacks</span></a>
                    <ul>
                        <li id="navpart8"><a href="/ciabatta">Ciabatta</a></li>
                        <li id="navpart9"><a href="/tunamelt">Tuna melt</a></li>
                        <li id="navpart10"><a href="/chickenwrap">Chicken wrap</a></li>
                    </ul>
                </li>
                <li id="navpart11"><a href="/others"><span class="upper">Others</span></a>
                    <ul>
                        <li id="navpart12"><a href="/breads">Breads</a></li>
                        <li id="navpart13"><a href="/pizzas">Pizzas</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <!-- CAKE GALLERY -->
        <div id="food-gallery" class="gallery right">
            <h1>Our Cakes</h1>
            <ul>
                @if($menu->isEmpty())
                    No products found.
                @else
                    @foreach($menu as $product)
                        <li><a href={!! $product['link'] !!}>
                            <img src={!! $product['image'] !!} />
                            <p>{{ $product['product_name'] }}</p></a>
                        </li>
                    @endforeach
                @endif
            </ul>
        </div>

    </main>

@endsection
