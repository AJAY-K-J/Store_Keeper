<?php

namespace App\Http\Controllers\storekeeper;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Contracts\Service\Attribute\Required;
use App\Models\storearrival;
class StoreArrivalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'date'=>'Required',
            'quantity'=>'required',
            'dcdate'=>'Required',
            'supplier'=>'Required',
            'price'=>'Required',
            'section'=>'Required',
            'Descriptionitem'=>'Required',
            'invoice'=>'Required',
            'officer'=>'Required',
            'itemname'=>'Required',
            'dcno'=>'Required',

        ]);


        $store= new storearrival;
        $store->date= $request->date;

        $store->details_of_supplier= $request->supplier;

        $store->description_of_item= $request->Descriptionitem;

        $store->quantity= $request->quantity;

        $store->price= $request->price;

        $store->invoice_no= $request->invoice;

        $store->delivery_chellan_no= $request->dcno;

        $store->date_of_delivery_chellan= $request->dcdate;

        $store->name_of_inspection_officer= $request->officer;

        $store->remarks= $request->remarks;

        $store->save();

        return redirect("/d");
        
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
