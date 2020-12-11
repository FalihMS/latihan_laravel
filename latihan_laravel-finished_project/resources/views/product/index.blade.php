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
            Product <span class="text-primary">Management</span>
        </div>
    </div>

    <div class="row justify-content-center m-5">
       <div class="col-8 justify-content-center">
           <a href="{{ url('/product/create') }}" class="btn btn-outline-primary">Add new product</a>
           <hr>
           <div class="d-flex justify-content-between align-content-end">
               <h5 class="mt-5 ml-3 text-primary font-weight-bold">Product List</h5>
               <h5 class="mt-5 ml-3 text-right align-self-baseline">Product Count: <span class="text-primary font-weight-bold">{{ sizeof($products) }}</span></h5>
           </div>
           <hr>
           @if(sizeof($products) <= 0)
               <h5 class="mt-5 ml-3 text-danger font-weight-bold text-center">There is no data</h5>
           @else
           <table class="table table-striped">
               <thead>
                   <tr class="text-primary">
                       <th>Product ID</th>
                       <th>Product Name</th>
                       <th>Product Category</th>
                       <th>Product Qty</th>
                       <th>Product Price</th>
                       <th>Actions</th>
                   </tr>
               </thead>
               @foreach($products as $product)
                   <tr class="align-content-center">
                       <td>{{ $product->id }}</td>
                       <td>{{ $product->name }}</td>
                       <td>{{ $product->category }}</td>
                       <td>{{ $product->qty }} pcs</td>
                       <td>Rp. {{ $product->price }}</td>
                       <td><a href="{{ url('/product/'.$product->id) }}" class="link">View Detail</a></td>
                   </tr>
               @endforeach
           </table>
           @endif
       </div>
    </div>

@endsection
