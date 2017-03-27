@extends('layouts.master')

@section('title')

    Piece of Heaven Bakery - Homepage

@endsection

@push('head')

    <link href="css/index.css" rel="stylesheet" />
    
@endpush

@section('main')

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

@endsection

@push('script')

    <script src="js/index.js"></script>

@endpush

