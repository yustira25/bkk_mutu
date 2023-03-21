<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;

use App\Exports\DataPelamarExport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class DataPelamarController extends Controller
{
    public function index()
    {
        $user = User::paginate(5);
        return view('pages.data_pelamar.index',['user'=>$user]);   
    }

    public function datapelamarexport()
    {
        return Excel::download(new DataPelamarExport,'Data-pelamar.xlsx');
    }
    public function search(Request $request)
    {
        if($request->has('search')){
            $user = User::where('name', 'LIKE', '%' .$request->search. '%')->paginate(5);
        }
        else {
            $user = User::paginate(5);
        }
        return view('pages.data_pelamar.index', ['user'=>$user]);
    }
}
