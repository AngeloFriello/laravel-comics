
@extends('layouts.app')

@section('content')
    
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-4 card">
                    <ul>
                        <img src={{$comic['thumb']}} alt="">
                        <li>name = {{$comic['title']}}</li>
                        <li>name = {{$comic['description']}}</li>
                        <li>name = {{$comic['price']}}</li>
                        <li>name = {{$comic['sale_date']}}</li>
                        <li>name = {{$comic['series']}}</li>
                        <li>name = {{$comic['type']}}</li>
                    </ul>                           
                </div>
            @endforeach
        </div>
    </div>
    
    <style>
        img{
            max-width: 200px;
        }
        li,ul{
            list-style: none;
        }
    </style>
@endsection