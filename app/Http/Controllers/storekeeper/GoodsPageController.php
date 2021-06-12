<?php

namespace App\Http\Controllers\storekeeper;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Stock;
use Illuminate\Support\Facades\DB;

class GoodsPageController extends Controller
{
    public function index()
    {

        return view('storekeeper.GIR_book');
    }
    public function goodslist()
    {


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
'stocks.product_date',
'stocks.product_id',


                'stocks.purchase_order_no',
                'stocks.purchase_order_date',
                'stocks.category_book',
               
                'stocks.category_book_page_no',
                'stocks.gir_page_no',
'stocks.arrivals_page_no',
                'items.name as item_name',
                'items.description_item',


            ])

            ->get();

        return $goods_details;
    }
}
