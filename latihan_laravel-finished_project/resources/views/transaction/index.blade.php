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
            Transaction <span class="text-primary">Management</span>
        </div>
    </div>

    <div class="row justify-content-center m-5">
       <div class="col-8 justify-content-center">
           <a href="{{ url('/transaction/create') }}" class="btn btn-outline-primary">Create New Transaction</a>
           <hr>
           <div class="d-flex justify-content-between align-content-end">
               <h5 class="mt-5 ml-3 text-primary font-weight-bold">Transaction List</h5>
               <h5 class="mt-5 ml-3 text-right align-self-baseline">Transaction Count: <span class="text-primary font-weight-bold">{{ sizeof($transactions) }}</span></h5>
           </div>
           <table class="table">
               <tr>
                   <th>Transaction ID</th>
                   <th>Total Product Buy</th>
                   <th>Total Price</th>
                   <th>Total Qty</th>
                   <th>Actions</th>
               </tr>
               @foreach($transactions as $transaction)
                   <tr class="align-content-center">
                       <td>{{ $transaction->id }}</td>
                       <td>{{ $transaction->total_product }} item</td>
                       <td>Rp {{ $transaction->total_price }}</td>
                       <td>{{ $transaction->total_qty }} pcs</td>
                       <td><a href="{{ url('/transaction/'.$transaction->id) }}" class="link">View Detail</a></td>
                   </tr>
               @endforeach
           </table>
       </div>
    </div>

@endsection
