<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DosenUpdateRequest;
use Session;
use App\models\Dosen;

class DosenController extends Controller
{
    public function index(){
        $data['lecture'] = Dosen::all();
        return view('dosen.index', $data);
    }

    public function create(){
        return view('dosen.tambah');
    }

    public function store(Request $request){
        Dosen::create($request->all());
        return redirect('dosen');

    }

    public function edit($id){
        $data['lecture'] = Dosen::find($id);
        return view('dosen.edit',$data);
    }

    public function update($id, Request $request) {
        $lecture = Dosen::find($id);
        $lecture->update($request->all());
        Session::flash('message','Data Berhasil Diubah');
        return redirect('dosen');
    }

    public function destroy($id) {
        $lecture = Dosen::find($id);
        $lecture->delete();
        Session::flash('message','Data Berhasil Dihapus');
        return redirect('dosen');
    }
}
