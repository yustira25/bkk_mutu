<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Apply;
use App\Models\Loker;
use App\Models\Pelamar;
use App\Helpers\FileHelper;
use Illuminate\Http\Request;
use App\Mail\NotifikasiInfoTes;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    public function index()
    {
        $data = Loker::latest()->take(3)->get();
        // dd($data);
        return view('pages.frontend.index',['data'=>$data]);
    }
    
    public function jobs()
    {
        $data = Loker::all();
        return view('pages.frontend.joblist',['data'=>$data]);
    }

    public function detail($slug)
    {
        $data = Loker::where('slug', $slug)->firstOrFail();
        $data->load('file');
        return view('pages.frontend.jobdetail',['loker'=>$data]);
    }
    
    public function showFormApply($slug)
    {
        $data = Loker::where('slug', $slug)->firstOrFail();
        $data->load('file');
        return view('pages.frontend.apply',['loker'=>$data]);
    }

    public function apply(Request $request)
    {
        DB::beginTransaction();
        try {
            $apply = [];
            $apply['user_id'] = Auth::user()->role_id;
            $apply['loker_id'] = $request->loker_id;
            $apply['status'] = 'APPLY';

            $ap = Apply::create($apply);

            $pelamar = [];
            $pelamar['user_id'] = Auth::user()->id;
            $pelamar['tgl_vaksin1'] = $request->tgl_vaksin1;
            $pelamar['tgl_vaksin2'] = $request->tgl_vaksin2;
            $pelamar['tgl_vaksin3'] = $request->tgl_vaksin3;
            $pelamar['no_ijazah'] = $request->no_ijazah;
            $pelamar['paklaring_file_id'] = FileHelper::upload($request->file('paklaring_file_id'));
            $pelamar['bukti_transfer_id'] = FileHelper::upload($request->file('bukti_transfer_id'));
            $pelamar['apply_id'] = $ap->id;


            Pelamar::create($pelamar);

            DB::commit();
            Alert::success('Data Berhasil Apply', 'Silahkan cek email anda!');
            Mail::to($request->user())->send(new NotifikasiInfoTes());
            return redirect('/');
        } catch (\Throwable $th) {
            DB::rollBack();
            dd([
                'message' => $th->getMessage(),
                'file' => $th->getFile() .'#'. $th->getLine(),
            ]);
        }
    }

    public function search(Request $request)
    {
        if($request->has('search')){
            $data = Loker::where('title', 'LIKE', '%' .$request->search. '%')->paginate(5);
        }
        else {
            $data = Loker::all();
        }
        return view('pages.frontend.index', ['data'=>$data]);
    }
}
