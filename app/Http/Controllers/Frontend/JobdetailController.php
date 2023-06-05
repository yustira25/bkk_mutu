<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Loker;
use App\Http\Controllers\Controller;

class JobdetailController extends Controller
{
    public function index()
    {
        $data = Loker::all();
        return view('pages.frontend.jobdetail',['data'=>$data]);
    }
    
}
