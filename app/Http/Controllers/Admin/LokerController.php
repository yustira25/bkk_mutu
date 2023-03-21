<?php

namespace App\Http\Controllers\Admin;

use App\Models\Loker;
use App\Helpers\FileHelper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Support\Facades\DB;

class LokerController extends Controller
{
    public function index(Request $request)
    {
        $data = Loker::paginate(5);
        return view('pages.loker.index',['data'=>$data]);
    }
    public function create()
    {
        return view('pages.loker.create');
    }
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $params = $request->all();
            unset($params['_token']);
            unset($params['file']);
            $fileId = FileHelper::upload($request->file);
            $params['file_id'] = $fileId;
            Loker::create($params);
            DB::commit();
            return redirect()->route('admin.loker.index')->with('success', 'Data Berhasil Tersimpan!');
        } catch (Exception $e) {
            DB::rollback();

            dd([
                'message' => $e->getMessage(),
                'file' => $e->getFile() . '#' . $e->getLine()
            ]);
        }
    }
    public function edit(Request $request, $id)
    {
        $edit = Loker::findorfail($id);
        return view('pages.loker.edit',compact('edit'));
    }
    public function update(Request $request, $id)
    {
        $edit = Loker::findorfail($id);
        $edit->update($request->all());
        return redirect()->route('admin.loker.index')->with('success', 'Data Berhasil Update!');
    }
    public function destroy($id)
    {
        $edit = Loker::findorfail($id);
        $edit->delete();
        return back()->with('info', 'Data Berhasil Dihapus!');
    }
    public function search(Request $request)
    {
        if($request->has('search')){
            $data = Loker::where('title', 'LIKE', '%' .$request->search. '%')->paginate(5);
        }
        else {
            $data = Loker::paginate(5);
        }
        return view('pages.loker.index', ['data'=>$data]);
    }

}
