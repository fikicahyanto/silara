<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DosenUpdateRequest;
use Session;
use App\models\Dosen;
use Illuminate\Support\Facades\Storage;

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
        $name_file = '';
        if($request->file('files')){
            $file = $request->file('files');
            $name_file = $file->getClientOriginalName();
            $file = $file->storeAs('assets/files',$name_file, "public");
        }
        Dosen::create([
            'nidn' => $request->nidn,
            'nama_dosen' => $request->nama_dosen,
            'files' => $name_file
        ]);

        return redirect('dosen');
        // Dosen::create($request->all());
    }

    public function edit($id){
        $data['lecture'] = Dosen::find($id);
        return view('dosen.edit',$data);
    }

    public function update($id, Request $request) {
        $lecture = Dosen::find($id);
        if($request->file('files')){
            Storage::disk('public')->delete('assets/files/'.$lecture->files); 
            $file = $request->file('files');
            $name_file = $file->getClientOriginalName();
            $file = $file->storeAs('assets/files',$name_file,"public");
        }else{
            $name_file = $lecture->files;    
        }
        $updateData = [
            'nidn' => $request->nidn,
            'nama_dosen' => $request->nama_dosen,
            'files' => $name_file
        ];
        $lecture->update($updateData);
        
        Session::flash('message','Data Berhasil Diubah');
        return redirect('dosen');
    }

    public function destroy($id) {
        $lecture = Dosen::findOrFail($id);
        Storage::disk('public')->delete('assets/files/'.$lecture->files); 
        $lecture->delete();
        Session::flash('message','Data Berhasil Dihapus');
        return redirect('dosen');
    }
}
