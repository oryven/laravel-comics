@extends('componentes.layouts.main-layout')

@section('content')
<div class="section-blue"></div>
<div class="container-comic">
    
    <h1>Batman</h1>
    <div class="container">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam nam possimus, dolorum odit culpa impedit iste. Est obcaecati aspernatur saepe provident dicta nam recusandae eum veniam deleniti ipsum? Eius, nihil.</p>
        <img src="{{asset('storage/assets/img/superman.jpg')}}" alt="">
    </div>
   
</div>
<section class="section-loghi-comic">

    <div>
        <div>
            <img src="{{asset('storage/assets/img/buy-comics-digital-comics.png')}}" alt="">
            <div>digital comics</div>
        </div>
                
        <div>
            <img src="{{asset('storage/assets/img/buy-comics-merchandise.png')}}" alt="">
            <div>merchandise</div>
        </div>

        <div>
            <img src="{{asset('storage/assets/img/buy-comics-shop-locator')}}" alt="">
            <div>shop</div>
        </div>

        <div>
            <img src="{{asset('storage/assets/img/buy-comics-subscriptions')}}" alt="">
            <div>subscriptions</div>
        </div>

        <div>
            <img src="{{asset('storage/assets/img/buy-dc-power-visa.svg')}}"alt="">
            <div>dc power visa</div>
        </div>
    </div>
</section>


@endsection

