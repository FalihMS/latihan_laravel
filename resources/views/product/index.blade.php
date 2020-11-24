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
               <h5 class="mt-5 ml-3 text-right align-self-baseline">Product Count: <span class="text-primary font-weight-bold">2</span></h5>
           </div>
           <table class="table">
               <tr>
                   <th>Product ID</th>
                   <th>Product Name</th>
                   <th>Product Category</th>
                   <th>Product Qty</th>
                   <th>Product Price</th>
                   <th>Actions</th>
               </tr>
               <tr class="align-content-center">
                   <td>1</td>
                   <td>Indiamie Goreng</td>
                   <td>Makanan</td>
                   <td>100 pcs</td>
                   <td>Rp. 1000</td>
                   <td><a href="{{ url('/product/1') }}" class="link">View Detail</a></td>
               </tr>
               <tr class="align-content-center">
                   <td>2</td>
                   <td>Teh Botol sosor</td>
                   <td>Minuman</td>
                   <td>50 pcs</td>
                   <td>Rp. 3500</td>
                   <td><a href="#" class="link">View Detail</a></td>
               </tr>
           </table>
       </div>
    </div>

@endsection
