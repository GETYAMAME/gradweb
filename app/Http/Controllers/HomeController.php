<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jobOfferList = DB::table('job_offer')
                              ->join('company_mst', 'job_offer.company_code', '=', 'company_mst.company_code')
                              ->get();
        return view('home',['jobOfferList'=>$jobOfferList]);
    }

}
