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
            <a class="btn btn-lg btn-primary" href="#" id="btn-add" role="button">Tambah Dosen</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NIDN</th>
                            <th>Nama Dosen</th>
                            <th>File</th>
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
                            <td>{{$value->file}}</td>
                            <td>27</td>
                            <td>2011/01/25</td>
                            <td><button class="btn btn-warning editModal" value="{{$value->id}}">edit</button> 
                                <button class="btn btn-danger delete" data-id="{{ $value->id }}" data-toggle="modal" data-target="#deleteModal">hapus</button>
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
@endsection
@section('script')
<script>
    $('#btn-add').on('click', function(){
        var url = "dosen/create";
        $.get(url , function (data) {
        //success data
        $('.modal-title').html('Tambah');
        $('#modal-content').html(data);
        $('.main_modal').modal('show');
        }) 
    });
    $(document).on('click','.editModal',function(){
        var url = "dosen/edit";
        var id= $(this).val();
        $.get(url + '/' + id, function (data) {
            //success data
        $('.modal-title').html('Edit');
        $('#modal-content').html(data);
        $('.main_modal').modal('show');
        }) 
    });
    $(document).on('click', '.delete', function() {
        var id = $(this).attr('data-id');
        var url = "dosen/" + id;
        $('#id-destroy').val(id);
        $('.DeleteModal form').attr('action', url);
    });
</script>
@endsection


    
