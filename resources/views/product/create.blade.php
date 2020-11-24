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
        <div class="col-8 justify-content-center text-center">
            <form>
                <div class="row m-2">
                    <div class="col-4 text-right align-self-end">
                        <h5>Product ID</h5>
                    </div>
                    <div class="col text-right align-self-end">
                        <h5>:</h5>
                    </div>
                    <div class="col-7">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="row m-2">
                    <div class="col-4 text-right align-self-end">
                        <h5>Product Name</h5>
                    </div>
                    <div class="col text-right align-self-end">
                        <h5>:</h5>
                    </div>
                    <div class="col-7">
                        <input type="text" class="form-control">
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
                        <select name="" id="" class="form-control">
                            <option value="Makanan" selected>Makanan</option>
                            <option value="Minuman">Minuman</option>
                        </select>
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
                        <input type="text" class="form-control">
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
                        <input type="text" class="form-control">
                    </div>
                </div>
            </form>
            <hr>
            <a href="#" class="btn btn-outline-primary">Save Product</a>
            <a href="#" class="btn btn-outline-danger">Clear Forms</a>
            <hr>
            <a href="{{ url('/product') }}" class="btn btn-outline-secondary">Go Back</a>


        </div>
    </div>

@endsection
