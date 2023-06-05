<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Loker;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JoblistController extends Controller
{
    public function index()
    {
        $data = Loker::all();
        return view('pages.frontend.joblist',['data'=>$data]);
    }
    public function search(Request $request)
    {
        if($request->has('search')){
            $data = Loker::where('title', 'LIKE', '%' .$request->search. '%')->paginate(5);
        }
        else {
            $data = Loker::all();
        }
        return view('pages.frontend.joblist', ['data'=>$data]);
    }
}
