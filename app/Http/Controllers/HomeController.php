<?php

namespace PowerPlantMall\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function getMerchantListPage()
    {
        return view('pages.merchant.list');
    }

    public function getProductListPage()
    {
        return view('pages.product.list');
    }

    public function getNewsPage()
    {
        return view('pages.news.list');
    }

    public function getArticlePage()
    {
        return view('pages.article.list');
    }
}
