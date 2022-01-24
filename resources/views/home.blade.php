@extends('componentes.layouts.main-layout')

@section('content')

<div class="container-comics">

    <button class="current_series">Current Series</button>

    <div class="container">
    
        <div class="thumbsComics">
    
            <img src="{{asset('storage/assets/img/superman.jpg')}}" alt="">
                <div>Superman</div>
        </div>    
        
        <div class="thumbsComics">
    
            <img src="{{asset('storage/assets/img/superman.jpg')}}" alt="">
                <div>Superman</div>
        </div>  

        <div class="thumbsComics">
    
            <img src="{{asset('storage/assets/img/superman.jpg')}}" alt="">
                <div>Superman</div>
        </div>  

        <div class="thumbsComics">
    
            <img src="{{asset('storage/assets/img/superman.jpg')}}" alt="">
                <div>Superman</div>
        </div>  

        <div class="thumbsComics">
    
            <img src="{{asset('storage/assets/img/superman.jpg')}}" alt="">
                <div>Superman</div>
        </div>  

        <div class="thumbsComics">
    
            <img src="{{asset('storage/assets/img/superman.jpg')}}" alt="">
                <div>Superman</div>
        </div>  
    </div>  
</div>

@endsection