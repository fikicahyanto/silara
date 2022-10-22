@extends('layouts.app')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Dosen</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the official DataTables documentation.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a class="btn btn-lg btn-primary" href="#" data-toggle="modal" data-target="#addModal" role="button">Tambah Dosen</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NIDN</th>
                            <th>Nama Dosen</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lecture as $value)
                        <tr>
                            <td>{{$value->nidn}}</td>
                            <td>{{$value->nama_dosen}}</td>
                            <td>New York</td>
                            <td>27</td>
                            <td>2011/01/25</td>
                            <td><button class="btn btn-warning editModal" value="{{$value->id}}">edit</button> <button class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">hapus</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<!-- Add Modal-->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                {{ Form::open(array('url' => 'dosen', 'method' => 'POST')) }}
                @csrf
                <div class="form-group row">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">NIDN</label>
                    <div class="col-sm-10">
                    {{ FORM::text('nidn',null,['class'=>'form-control','placeholder'=>'Nidn'])}}
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">NAMA DOSEN</label>
                    <div class="col-sm-10">
                    {{ FORM::text('nama_dosen',null,['class'=>'form-control','placeholder'=>'Nama Dosen'])}}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                {{ Form::submit('Save',['class' => 'btn btn-primary'])}}             
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
<!-- Edit Modal-->
<div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div id="modal-content" class="modal-body">
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                Yakin ingin dihapus ?
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                {{ Form::open(array('url' => 'dosen/'.$value->id, 'method' => 'POST')) }}    
                {{ Form::submit('Delete',['class' => 'btn btn-primary'])}}             
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@endsection


    
