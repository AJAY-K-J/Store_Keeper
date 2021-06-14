<?php

namespace App\Http\Controllers\sections;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Section;
use Illuminate\Support\Facades\DB;

class SectionStockPageController extends Controller
{
    public function index(){


        return view('Sections.section_store_book');

    }



}
