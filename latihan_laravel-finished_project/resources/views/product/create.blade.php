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
    <div class="title m-b-md display-4 text-center">
        Create <span class="text-primary">Product</span>
    </div>
    <div class="row justify-content-center m-5">
        @if($errors->any())
            <div class="alert alert-danger w-75" role="alert">
                <h5>Your Input is invalid</h5>
            </div>
        @endif
        @if(session()->has('message'))
            <div class="alert alert-success w-75" role="alert">
                <h5>{{ session()->get('message') }}</h5>
            </div>
        @endif
        <div class="col-8 justify-content-center text-center">
            <form action="/product/insert" method="POST">
                @csrf
                <div class="row m-2">
                    <div class="col-4 text-right align-self-end">
                        <h5>Product Name</h5>
                    </div>
                    <div class="col text-right align-self-end">
                        <h5>:</h5>
                    </div>
                    <div class="col-7">
                        <input type="text" class="form-control {{ $errors->first('name') ? 'border-danger' : '' }}" name="name" value="{{ @old('name') }}">
                    </div>
                </div>

                <div class="row m-2">
                    <div class="col-4 offset-5 text-left text-danger">
                        <p>{{ $errors->first('name') }}</p>
                    </div>
                </div>

                <div class="row m-2">
                    <div class="col-4 text-right align-self-end">
                        <h5>Product Category</h5>
                    </div>
                    <div class="col text-right align-self-end">
                        <h5>:</h5>
                    </div>
                    <div class="col-7">
                        <select name="category" id="category" class="form-control">
                            <option selected>--select category--</option>
                            <option value="Makanan">Makanan</option>
                            <option value="Minuman">Minuman</option>
                        </select>
                    </div>
                </div>

                <div class="row m-2">
                    <div class="col-4 offset-5 text-left text-danger">
                        <p>{{ $errors->first('category') }}</p>
                    </div>
                </div>

                <div class="row m-2">
                    <div class="col-4 text-right align-self-end">
                        <h5>Product Quantity</h5>
                    </div>
                    <div class="col text-right align-self-end">
                        <h5>:</h5>
                    </div>
                    <div class="col-7">
                        <input type="text" class="form-control" name="qty" value="{{ @old('qty') }}">
                    </div>
                </div>

                <div class="row m-2">
                    <div class="col-4 offset-5 text-left text-danger">
                        <p>{{ $errors->first('qty') }}</p>
                    </div>
                </div>

                <div class="row m-2">
                    <div class="col-4 text-right align-self-end">
                        <h5>Product Price</h5>
                    </div>
                    <div class="col text-right align-self-end">
                        <h5>:</h5>
                    </div>
                    <div class="col-7">
                        <input type="text" class="form-control" name="price" value="{{ @old('price') }}">
                    </div>
                </div>

                <div class="row m-2">
                    <div class="col-4 offset-5 text-left text-danger">
                        <p>{{ $errors->first('price') }}</p>
                    </div>
                </div>

            <hr>
            <input type="submit" class="btn btn-outline-primary" value="Save Product">
            </form>
            <a href="#" class="btn btn-outline-danger">Clear Forms</a>
            <hr>
            <a href="{{ url('/product') }}" class="btn btn-outline-secondary">Go Back</a>


        </div>
    </div>

@endsection
