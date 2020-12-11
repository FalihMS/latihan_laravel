<?php

namespace App\Http\Controllers;

use App\detail_transaction;
use App\Product;
use App\transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactions = transaction::all();
        foreach ($transactions as $transaction){
            $transaction['total_product'] = sizeof($transaction->detail);
            $transaction['total_qty'] = 0;
            $transaction['total_price'] = 0;

            foreach ($transaction->detail as $detail){
                $transaction['total_qty'] += $detail->qty;
                $transaction['total_price'] += $detail->qty * $detail->product->price;
            }
        }
        return view('transaction.index')->with('transactions', $transactions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $products = Product::all();
        return view('transaction.create')
            ->with('products', $products);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //save transaksi
        $transaction = transaction::create([
           'idStaff' => Auth::user()->id,
           'date' => date('Y-m-d h-i-s')
        ]);

        $size = sizeof(Product::all());
        for($x =0;$x<$size;$x++){
            $id = $request['product_id_'. ($x+1)];
            $qty = $request['product_qty_'.($x+1)];
            if($qty > 0){
                //save to detail
                detail_transaction::create([
                    'idTransaction' => $transaction->id,
                    'idProduct' => $id,
                    'qty' => $qty,
                ]);
            }
        }
        return redirect('/transaction/create')
            ->with('message', "New Transaction have been recorded");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $transaction = transaction::where('id',$id)->first();
//        echo $transaction;
        $transaction['total_price'] = 0;

        foreach ($transaction->detail as $detail){
            $transaction['total_price'] += $detail->qty * $detail->product->price;
        }

        return view('transaction.detail')->with('transaction', $transaction);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(transaction $transaction)
    {
        //
    }
}
