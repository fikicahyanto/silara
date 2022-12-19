<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MahasiswaUpdateRequest;
use Session;
use App\models\Mahasiswa;
use Illuminate\Support\Facades\Storage;

class MahasiswaController extends Controller
{
    public function index(){
        $data['mhs'] = Mahasiswa::orderBy('id','ASC')->get();
        return view('mahasiswa.index', $data);
    }

    public function create(){
        return view('mahasiswa.tambah');
    }

    public function store(Request $request){
        $name_file = '';
        if($request->file('files')){
            $file = $request->file('files');
            $name_file = $file->getClientOriginalName();
            $file = $file->storeAs('assets/files',$name_file, "public");
        }
        $validated = $request->validate([
            'nim' => 'required',
            'nama_mahasiswa' => 'required',
        ]);
        $post = Mahasiswa::create([
            'nim' => $request->nim,
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'files' => $name_file
        ]);
        if($post){
            toast('Data Berhasil Ditambah','success');
            return redirect('mahasiswa');
        }else{
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem occurred, please try again'
                ]);
        }
    }

    public function edit($id){
        $data['mhs'] = Mahasiswa::find($id);
        return view('mahasiswa.edit',$data);
    }

    public function update($id, Request $request) {
        $mhs = Mahasiswa::find($id);
        if($request->file('files')){
            Storage::disk('public')->delete('assets/files/'.$mhs->files); 
            $file = $request->file('files');
            $name_file = $file->getClientOriginalName();
            $file = $file->storeAs('assets/files',$name_file,"public");
        }else{
            $name_file = $mhs->files;    
        }
        $updateData = [
            'nim' => $request->nim,
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'files' => $name_file
        ];
        $mhs->update($updateData);
        
        toast('Data Berhasil Diubah','success');
        return redirect('mahasiswa');
    }

    public function destroy($id) {
        $mhs = Mahasiswa::findOrFail($id);
        Storage::disk('public')->delete('assets/files/'.$mhs->files); 
        $mhs->delete();
        toast('Data Berhasil Dihapus','success');
        return redirect('mahasiswa');
    }
}
