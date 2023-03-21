<?php

namespace App\Http\Controllers\Admin;

use App\Models\Loker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        //
    }
    public function search(Request $request)
    {
        $search = $request->input('search');

        $data = DB::table('lokers')
                ->where('title', 'like', '%'.$search.'%')
                ->get();

        return view('admin.loker.search', ['data' => $data]);
    }
}
