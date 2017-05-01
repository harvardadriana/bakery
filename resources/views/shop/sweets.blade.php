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
                <li id="sweets" class="active"><a href="/menu/sweets"><span class="upper">Sweets</span></a>
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

        <!-- CAKE GALLERY -->
        <div id="food-gallery" class="gallery right">
            <h1>Our Sweets</h1>

            <form method='POST' action='/menu/sweets'>
                {{ csrf_field() }}

                <input id="submit" type='submit' value="Order" />

                <ul>
                    @if($menu->isEmpty())
                        No products found.
                    @else
                        @foreach($menu as $key=>$product)
                            <li>
                                <a href={!! $product->link !!}>
                                {!! $product->image !!}</a>
                                {!! $product->product_name !!}
                                ${!! $product->price !!}
 
                                <label><input type="checkbox" name={{ ++$key }} value={{ ++$key }} {{ (++$key)  ? '' : 'CHECKED' }}/>Add</label>

                            </li>
                        @endforeach
                    @endif
                </ul>
            </form>

        </div>
    </main>

@endsection
