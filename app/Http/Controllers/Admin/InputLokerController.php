<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pelamar;
use Illuminate\Http\Request;

use App\Exports\InputLokerExport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class InputLokerController extends Controller
{
    public function index()
    {
        $pelamar = Pelamar::all();
        return view('pages.input_loker.index',['pelamar'=>$pelamar]);   
    }
    public function datapelamarexport()
    {
        return Excel::download(new InputLokerExport,'Data-inputloker.xlsx');
    }
}
