<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Session;

class RecruitmentInputController extends Controller
{
    // 初期表示
    public function index($id){
        $jobOffer = DB::table('job_offer')
                        ->where('job_offer_id', $id)
                        ->join('company_mst', 'job_offer.company_code', '=', 'company_mst.company_code')
                        ->first();
        session(['sesSelectedJob' => $jobOffer]);
        return view('recruitmentInput',['jobOffer'=>$jobOffer]);
    }

    // 「確認」ボタン押下時
    public function confrim(Request $request){
        $jobOffer = session('sesSelectedJob');
        return view('recruitmentConfrim',['request'=>$request,'jobOffer'=>$jobOffer]);
    }
}
