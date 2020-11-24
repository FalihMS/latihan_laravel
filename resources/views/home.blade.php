@extends('layouts.app')
@section('add_css')
    <style>
        html, body, main {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            min-height: 100vh;
            margin: 0;
        }
        a:hover.card{
            border-color: #5cb85c;
            color: #5cb85c;
            text-decoration: none;
        }
    </style>
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="title m-b-md display-4">
            Welcome, <span class="text-primary">{{ ucfirst(explode(' ',trim(Auth::user()->name))[0]) }}</span>
        </div>
    </div>
    <div class="row justify-content-center w-100 m-5">
       <a href="{{ url('/transaction') }}" class="card px-5 py-3 col-6 text-center">
           <h3>Create Transaction</h3>
       </a>
    </div>
    <div class="row justify-content-center w-100 m-5">
        <a href="{{ url('/product') }}" class="card px-5 py-3 col-6 text-center">
            <h3>Manage Products</h3>
        </a>
    </div>

@endsection
