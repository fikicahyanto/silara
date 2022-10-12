<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function store(request $request){
        Dosen::create($request->all());
        return redirect('dosen');

    }
}
