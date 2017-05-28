@extends('layouts.master')

@section('title')

    Piece of Heaven Bakery - Shop online
    
@endsection

@push('head')

    <link href="/css/menu.css" rel="stylesheet" />
    
@endpush

@section('main')

    <main>

        @if(Session::get('message') != null)
            <div class='message'>
                {{ Session::get('message') }}
            </div>
        @endif

        <!-- SIDE NAVIGATION -->
        <div id="side-menu" class="left">
            <h2>Side navigation</h2>
            <ul>
                <li id="sweets" class="menu active"><a href="#"><span class="upper">Sweets</span></a>
                    <ul class="subitems">
                        <li>Cakes</li>
                        <li>Cupcakes</li>
                        <li>Pies</li>
                        <li>Cookies</li>
                        <li>Ice cream cakes</li>
                    </ul>
                </li>
                <li id="snacks" class="menu" ><a href="#"><span class="upper">Snacks</span></a>
                    <ul class="subitems">
                        <li>Ciabatta</li>
                        <li>Tuna melt</li>
                        <li>Chicken wrap</li>
                    </ul>
                </li>
                <li id="others" class="menu" ><a href="#"><span class="upper">Others</span></a>
                    <ul class="subitems">
                        <li>Breads</li>
                        <li>Pizzas</li>
                    </ul>
                </li>
            </ul>
        </div>

        <!-- FOOD GALLERY -->
        <div id="food-gallery" class="gallery right">

            <form method='POST' action='/menu/sweets'> 
                
                {{ csrf_field() }}

                <section id="sweetsgallery" class="" >

                    <h1>Our Sweets</h1>

                    <input id="submit" type='submit' value="Order" />

                    <ul>
                        @if(!isset($sweets))
                            No products found.
                        @else
                            @foreach($sweets as $key=>$product)
                                <li>
                                    <a href={!! $product->link !!}>
                                    {!! $product->image !!}</a>
                                    {!! $product->product_name !!}
                                    ${!! $product->price !!}
     
                                    <label><input type="checkbox" name='order[]' value={{ ++$key }} {{ (++$key)  ? '' : 'CHECKED' }} />Add</label>
                                </li>
                            @endforeach
                        @endif
                    </ul>

                </section>

                <section id="snacksgallery" class="hide" >

                    <h1>Our Snacks</h1>

                    <input id="submit" type='submit' value="Order" />

                    <ul>
                        @if(!isset($snacks))
                            No products found.
                        @else
                            @foreach($snacks as $key=>$product)
                                <li>
                                    <a href={!! $product->link !!}>
                                    {!! $product->image !!}</a>
                                    {!! $product->product_name !!}
                                    ${!! $product->price !!}
     
                                    <label><input type="checkbox" name='order[]' value={{ ++$key }} {{ (++$key)  ? '' : 'CHECKED' }} />Add</label>
                                </li>
                            @endforeach
                        @endif
                    </ul>

                </section>

                <section id="othersgallery" class="hide" >

                    <h1>Pizzas &amp; Breads </h1>

                    <input id="submit" type='submit' value="Order" />

                    <ul>
                        @if(!isset($others))
                            No products found.
                        @else
                            @foreach($others as $key=>$product)
                                <li>
                                    <a href={!! $product->link !!}>
                                    {!! $product->image !!}</a>
                                    {!! $product->product_name !!}
                                    ${!! $product->price !!}
     
                                    <label><input type="checkbox" name='order[]' value={{ ++$key }} {{ (++$key)  ? '' : 'CHECKED' }} />Add</label>
                                </li>
                            @endforeach
                        @endif
                    </ul>

                </section>

            </form>

        </div>

    </main>

@endsection