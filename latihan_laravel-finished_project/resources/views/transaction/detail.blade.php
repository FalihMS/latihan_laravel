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
        Detail <span class="text-primary">Transaction</span>
    </div>
    <div class="row justify-content-center m-5">
        <div class="col-8 justify-content-center text-center">
            <form>
                <div class="row m-2">
                    <div class="col-4 text-right align-self-end">
                        <h5>Transaction ID</h5>
                    </div>
                    <div class="col text-right align-self-end">
                        <h5>:</h5>
                    </div>
                    <div class="col-7">
                        <input type="text" class="form-control" value="{{ $transaction->id }}" disabled>
                    </div>
                </div>
                <div class="row m-2">
                    <div class="col-4 text-right align-self-end">
                        <h5>Staff Handled</h5>
                    </div>
                    <div class="col text-right align-self-end">
                        <h5>:</h5>
                    </div>
                    <div class="col-7">
                        <input type="text" class="form-control" value="{{ ucwords($transaction->user->name) }}" disabled>
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
                        <input type="text" class="form-control" value="{{$transaction->date}}" readonly>
                    </div>
                </div>
                <div class="row m-2">
                    <div class="col-4 text-right align-self-end">
                        <h5>Transaction Worth</h5>
                    </div>
                    <div class="col text-right align-self-end">
                        <h5>:</h5>
                    </div>
                    <div class="col-7">
                        <input type="text" class="form-control" value="Rp. {{ $transaction->total_price }}" disabled>
                    </div>
                </div>
            </form>
            <hr>
                <div class="row justify-content-around">
                    @foreach($transaction->detail as $detail)
                        <div class="col-3 card p-3 m-1">
                            <h3 class="text-primary">{{ ucfirst($detail->product->name) }}</h3>
                            <h5>{{ $detail->qty }} pcs</h5>
                            <h3>Rp. {{ $detail->qty * $detail->product->price }}</h3>
                        </div>
                    @endforeach
                </div>
            <hr>
            <a href="{{ url('/transaction') }}" class="btn btn-outline-secondary">Go Back</a>

        </div>
    </div>

@endsection
