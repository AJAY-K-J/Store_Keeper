<?php

namespace App\Http\Controllers\storekeeper;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Contracts\Service\Attribute\Required;
use App\Models\storearrival;
use App\Models\Item;
use App\Models\Section;
class StoreArrivalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $item_details=Item::all();
$section_details=Section::all();
        return view('storekeeper.dashboard',compact('item_details','section_details'));

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

            'date' => 'Required',
            'quantity' => 'required',
            'Dc_date' => 'Required',
            'supplier' => 'Required',
            'price' => 'Required',
            'section' => 'Required',
            'description_of_item' => 'Required',
            'invoice' => 'Required',
            'section_officer' => 'Required',
            'item_name' => 'Required',
            'Dc_no' => 'Required',

        ]);


        if ($request->id) {
            $store = storearrival::find($request->id);
        } else
            $store = new storearrival;
        if ($request->date) {
            $store->date = $request->date;
        }
        if ($request->quantity) {
            $store->quantity = $request->quantity;
        }
        if ($request->Dc_date) {
            $store->Dc_date = $request->Dc_date;
        }

        if ($request->supplier) {
            $store->supplier = $request->supplier;
        }
        if ($request->price) {
            $store->price = $request->price;
        }
        if ($request->section) {
            $store->section = $request->section;
        }
        if ($request->description_of_item) {
            $store->description_of_item = $request->description_of_item;
        }
        if ($request->invoice) {
            $store->invoice = $request->invoice;
        }
        if ($request->section_officer) {
            $store->section_officer = $request->section_officer;
        }
        if ($request->item_name) {
            $store->item_name = $request->item_name;
        }

        if ($request->Dc_no) {
            $store->Dc_no = $request->Dc_no;
        } if ($request->remarks) {
            $store->remarks = $request->remarks;
        }



        $store->save();
        return 'Success';
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
