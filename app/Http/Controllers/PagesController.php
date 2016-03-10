<?php

namespace App\Http\Controllers;

use App\Product;
use App\Http\Requests;
use Illuminate\Http\Request;


class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $products = Product::paginate(5);
        return view('pages.homev3', compact('products'));
    }
}
