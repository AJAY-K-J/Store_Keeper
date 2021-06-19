<?php

namespace App\Http\Controllers\GEM_consignee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\storearrival;

class ConsigneeResponseController extends Controller
{
  
    public function gem_confirm(Request $request){


        $request->validate([


            'approvedquantity' => 'required|integer|min:1'


        ]);




        if($request->id){

            $record=storearrival::find($request->id);
            
            if($record){
                $record->remarks=$request->remarks;
            
                $record->approvedquantity=$request->approvedquantity;
                $record->rejectedquantity=  $record->quantity - $request->approvedquantity;
            
                $record->gem_officer=0;
            
            }
            
            $record->save();
            return 'Success';
            
                    };






    }




    public function gem_reject(Request $request){

        if($request->id){

$reject_record=storearrival::find($request->id);

if($reject_record){
    $reject_record->remarks=$request->remarks;
     $reject_record->rejectedquantity= $reject_record->quantity;
    $reject_record->gem_officer=2;

}

$reject_record->save();
return 'Success';

        };
    }

}
