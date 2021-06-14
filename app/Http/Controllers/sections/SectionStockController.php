<?php

namespace App\Http\Controllers\sections;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Support\Facades\DB;

class SectionStockController extends Controller
{
    public function sectionStock()
    {



        if (Session()->has('section-in-charge')) {

            $user_id = Session('section-in-charge');
            $user_detail = User::where('id', '=',  $user_id)->pluck('section');


            $data = DB::table('section_stocks')
                ->join('storearrivals', 'storearrivals.id', '=', 'section_stocks.product_id')
                ->join('items', 'items.id', '=', 'section_stocks.item_id')
                ->select([



                    'section_stocks.product_id',
                    'section_stocks.item_id',
                    'section_stocks.section_name',
                    'section_stocks.quantity',
                    'items.name as item_name',
                    'items.description_item',
                ])
                ->where('section_name', '=', $user_detail)
                ->get();

            return   $data;
        }
    }


   
}
