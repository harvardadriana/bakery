@extends('layouts.master')

@section('title')

    Piece of Heaven Bakery - Shop online - Breads &amp; Pizzas
    
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
                <li id="sweets"><a href="/menu/cakes"><span class="upper">Sweets</span></a>
                    <ul class="subitems">
                        <li>Cakes</li>
                        <li>Cupcakes</li>
                        <li>Pies</li>
                        <li>Cookies</li>
                        <li>Ice cream cakes</li>
                    </ul>
                </li>
                <li id="snacks"><a href="/menu/snacks"><span class="upper">Snacks</span></a>
                    <ul class="subitems">
                        <li>Ciabatta</li>
                        <li>Tuna melt</li>
                        <li>Chicken wrap</li>
                    </ul>
                </li>
                <li id="others"><a href="/menu/others"><span class="upper">Others</span></a>
                    <ul class="subitems">
                        <li>Breads</li>
                        <li>Pizzas</li>
                    </ul>
                </li>
            </ul>
        </div>

        <!-- SNACKS GALLERY -->
        <div id="food-gallery" class="gallery right">
            <h1>Breads &amp; Pizzas</h1>
            <ul>
                @if($menu->isEmpty())
                    No products found.
                @else
                    @foreach($menu as $product)
                        <li><a href={!! $product['link'] !!}>
                            {!! $product['image'] !!}
                            {!! $product['product_name'] !!}</a>
                            {!! $product['price'] !!}
                            <button>Add to cart</button>
                        </li>
                    @endforeach
                @endif
                
            </ul>
        </div>

    </main>

@endsection
