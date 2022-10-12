@extends('template.header')

@section('content')

<div class="bg-light p-5 rounded">
<a class="btn btn-lg btn-primary" href="/dosen/create" role="button">Tambah Dosen</a>
</div>

<table class="table table-bordered">
    <tr>
        <td>NIDN</td>
        <td>NAMA DOSEN</td>
    </tr>
    @foreach ($lecture as $value)
    <tr>
        <td>{{$value->nidn}}</td>
        <td>{{$value->nama_dosen}}</td>
    </tr>
    @endforeach
    
</table>
@endsection
@extends('template.footer')


    
