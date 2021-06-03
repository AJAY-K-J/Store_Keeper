<?php

namespace App\Http\Controllers\storekeeper;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Category;

class ItemController extends Controller
{
    public function index(){

$category_details=Category::all();
        return view('storekeeper.additems',compact('category_details'));
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
  if($request->description_item){
    $item->description_item=$request->description_item;
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
