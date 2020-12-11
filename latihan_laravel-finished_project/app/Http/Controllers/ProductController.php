<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
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
        $products = Product::all();
        return view('product.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //method untuk insert data
        $input = $request->all();
        $rules = [
            'name' => 'required',
            'category' => Rule::in('Makanan', 'Minuman'),
            'qty' => 'required|numeric',
            'price' => 'required|numeric',
        ];
        $message = [
            'required' => 'Product :attribute is required',
            'in' => 'Please select valid :attribute',
            'numeric' => 'Product :attribute must be a number',
        ];

        $validator = Validator::make($input, $rules, $message);

        if($validator->fails()){
            return redirect('/product/create')
                ->withErrors($validator)
                ->withInput();
        }else{
            Product::create([
                'name' => $request->name,
                'category' => $request->category,
                'qty' => $request->qty,
                'price' => $request->price,
            ]);
            return redirect('product/create')
                ->with('message', 'Product Have been saved');
        }



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::where('id', $id)->get()->first();
        return view('product.detail')->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
