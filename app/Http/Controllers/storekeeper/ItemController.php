<?php

namespace App\Http\Controllers\storekeeper;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Item;

class ItemController extends Controller
{
    public function index(){
        return view('storekeeper.additems');
    }



    
    public function itemlist(){

        $item= Item::all();
        return $item;
        
    }


    public function store(Request $request)
    {

        $request->validate([

            'name'=>'Required',
            
            'category_name'=>'Required',

            ]);

if($request->id){
    $item=Item::find($request->id);
}else
    $item = new Item;
  if($request->name){
      $item->name=$request->name;
  }
  if($request->category_name){
    $item->category_name=$request->category_name;
}


$item->save();
return 'Success';     
        
    }





    public function destroy( $id)
    {
        $delete_item =Item::find($id);
        $delete_item->delete();
        return 'Success';
    }
}
