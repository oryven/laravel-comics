@extends('componentes.layouts.main-layout')

@section('content')

<div class="container-comics">

    <button class="current_series">Current Series</button>

    <div class="container">

        @foreach ($arrComics as $comics)

        <div class="thumbsComics">

            <a href="{{route('comic')}}"><img src="{{$comics['image']}}">

            <div>{{$comics['title']}}</a></div>
            
        </div>
            
        @endforeach
    
        {{-- <div class="thumbsComics">
            <a href="{{route('comic')}}">
                <img src="{{asset('storage/assets/img/superman.jpg')}}" alt="">
                <div>Superman</div>
            </a>
        </div>    
        
        <div class="thumbsComics">
            <a href="{{route('comic')}}">
                <img src="{{asset('storage/assets/img/superman.jpg')}}" alt="">
                <div>Superman</div>
            </a>
        </div>  

        <div class="thumbsComics">
            <a href="{{route('comic')}}">
                <img src="{{asset('storage/assets/img/superman.jpg')}}" alt="">
                <div>Superman</div>
            </a>
        </div>  

        <div class="thumbsComics">
            <a href="{{route('comic')}}">
                <img src="{{asset('storage/assets/img/superman.jpg')}}" alt="">
                <div>Superman</div>
            </a>
        </div>  

        <div class="thumbsComics">
            <a href="{{route('comic')}}">
                <img src="{{asset('storage/assets/img/superman.jpg')}}" alt="">
                <div>Superman</div>
            </a>
        </div>  

        <div class="thumbsComics">
            <a href="{{route('comic')}}">
                <img src="{{asset('storage/assets/img/superman.jpg')}}" alt="">
                <div>Superman</div>
            </a>
        </div>   --}}
    </div>  
</div>

@include('componentes.loghi')

@endsection