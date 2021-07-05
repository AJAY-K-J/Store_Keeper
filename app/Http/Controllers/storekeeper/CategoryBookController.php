<?php

namespace App\Http\Controllers\storekeeper;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Stock;
use Illuminate\Support\Facades\DB;

class CategoryBookController extends Controller
{
    

    public function dsrindex(){

        return view('storekeeper.dsrbook');
    }

    public function kardexindex(){

        return view('storekeeper.kardexbook');
    }



    public function dsrdetails(){

      
        $goods_details = DB::table('stocks')
        ->join('sections', 'sections.id', '=', 'stocks.section_id')

        ->join('items', 'items.id', '=', 'stocks.item_id')

        ->join('suppliers', 'suppliers.id', '=', 'stocks.product_supplier_id')
        ->select([


            'suppliers.name as supplier_name',
            'suppliers.gst',
            'suppliers.Details',
            'stocks.price',
            'stocks.invoice',
            'stocks.Dc_no',
            'stocks.quantity',
            'stocks.balance_quantity',
            'stocks.product_date',
            'stocks.product_id',
            'stocks.item_id',

            'stocks.purchase_order_no',
            'stocks.purchase_order_date',
            'stocks.category_book',

            'stocks.category_book_page_no',
            'stocks.gir_page_no',
            'stocks.arrivals_page_no',
            'items.name as item_name',
            'items.description_item',


        ])
->where('category_book','=','DSR')
        ->paginate(5);

    return $goods_details;

    }





    public function kardexdetails(){

        $kardex_details = DB::table('stocks')
        ->join('sections', 'sections.id', '=', 'stocks.section_id')

        ->join('items', 'items.id', '=', 'stocks.item_id')

        ->join('suppliers', 'suppliers.id', '=', 'stocks.product_supplier_id')
        ->select([


            'suppliers.name as supplier_name',
            'suppliers.gst',
            'suppliers.Details',
            'stocks.price',
            'stocks.invoice',
            'stocks.Dc_no',
            'stocks.quantity',
            'stocks.balance_quantity',
            'stocks.product_date',
            'stocks.product_id',
            'stocks.item_id',

            'stocks.purchase_order_no',
            'stocks.purchase_order_date',
            'stocks.category_book',

            'stocks.category_book_page_no',
            'stocks.gir_page_no',
            'stocks.arrivals_page_no',
            'items.name as item_name',
            'items.description_item',


        ])
->where('category_book','=','kardex')
        ->paginate(5);

    return $kardex_details;


    }






    


}
