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
        Create <span class="text-primary">Transaction</span>
    </div>
    <div class="row justify-content-center m-5">
        @if(session()->has('message'))
            <div class="alert alert-success w-75" role="alert">
                <h5>{{ session()->get('message') }}</h5>
            </div>
        @endif
        <div class="col-8 justify-content-center text-center">
            <form action="/transaction/insert" method="POST">
                @csrf
                <div class="row m-2">
                    <div class="col-4 text-right align-self-end">
                        <h5>Staff Handled</h5>
                    </div>
                    <div class="col text-right align-self-end">
                        <h5>:</h5>
                    </div>
                    <div class="col-7">
                        <input type="text" class="form-control" value="{{ Auth::user()->name }}" disabled>
                    </div>
                </div>
                <div class="row m-2">
                    <div class="col-4 text-right align-self-end">
                        <h5>Transaction Date</h5>
                    </div>
                    <div class="col text-right align-self-end">
                        <h5>:</h5>
                    </div>
                    <div class="col-7">
                        <input type="text" class="form-control" value="{{ date('Y-m-d') }}" readonly>
                    </div>
                </div>
            </form>
            <hr>
            <h3>Basket <span class="text-primary">List</span></h3>
            <form action="/transaction/insert" method="POST">
                @csrf
                <div class="row justify-content-center">
                    <table class="table w-75 table-striped">
                        <tr>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Product Stock</th>
                            <th>Qty Buy</th>
                        </tr>
                        @foreach($products as $product)
                            <input type="hidden" value="{{$product->id}}" name="{{ 'product_id_'.$product->id }}">
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->qty }}</td>
                                <td class="d-flex justify-content-center">
                                    <input type="text" class="form-control w-25 text-center" value="0" name="{{ 'product_qty_'.$product->id }}">
                                </td>
                            </tr>
                        @endforeach
                    </table>

                </div>
                <input type="submit" value="Create Transaction" class="btn btn-primary">
            </form>
            <hr>
            <a href="{{ url('/transaction') }}" class="btn btn-outline-secondary">Go Back</a>

        </div>
    </div>

@endsection
