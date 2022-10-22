@extends('template.header')
@section('content')
<div class="bg-light p-5 rounded">
</div>
{{ Form::open(array('url' => 'dosen/'.$lecture->id, 'method' => 'POST')) }}
  <tr>
    <td>NIDN</td>
    <td> {{ FORM::text('nidn',$value = $lecture->nidn,['class'=>'form-control','placeholder'=>'nidn'])}}</td>
  </tr>
  <tr>
    <td>Nama Dosen</td>
    <td> {{ FORM::text('nama_dosen',$value = $lecture->nama_dosen,['class'=>'form-control','placeholder'=>'nama dosen'])}}</td>
  </tr>
  {{ Form::submit('Simpan Data',['class' => 'btn btn-primary'])}}
  <a class="btn btn-warning" href="{{ route('dosen.index') }}">Back</a>
{{ Form::close() }}
@endsection

@extends('template.footer')