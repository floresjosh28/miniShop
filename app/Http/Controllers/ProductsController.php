<?php

namespace MiniShop\Http\Controllers;

use MiniShop\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $this->validate($request, [
            'prodname' => 'required',
            'prodprice' => 'required|numeric',
            'prodquant' => 'required|numeric',
            'prodsize' => 'required|alpha_num',

            ]);


       $products = new Products();
        $products->name = $request->prodname;
        $products->price = $request->prodprice;
        $products->quantity = $request->prodquant;
        $products->size = $request->prodsize;
        $products->save();

        return redirect('/home')->with('success', 'Product was added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
       $currProd = Products::where('id', $id)->get();
        return view('products.edit')->with('selProd', $currProd)->with('id', $id); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'prodname' => 'required',
            'prodprice' => 'required|numeric',
            'prodquant' => 'required|numeric',
            'prodsize' => 'required|alpha_num',
            ]);


        $products = Products::find($id);
        $products->name = $request->prodname;
        $products->price = $request->prodprice;
        $products->quantity = $request->prodquant;
        $products->size = $request->prodsize;
        $products->save();

        return redirect('/home')->with('success', 'Product was edited.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Products::find($id);

        $products->delete();

        return redirect('/home')->with('success', 'Product has been deleted');
    }
}
