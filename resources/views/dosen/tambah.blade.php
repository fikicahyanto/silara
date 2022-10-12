@extends('template.header')
<div class="bg-light p-5 rounded">
</div>
{{ Form::open(array('url' => 'dosen', 'method' => 'POST')) }}
<form>
  <tr>
    <td>NIDN</td>
    <td> {{ FORM::text('nidn',null,['class'=>'form-control','placeholder'=>'nidn'])}}</td>
  </tr>
  <tr>
    <td>Nama Dosen</td>
    <td> {{ FORM::text('nama_dosen',null,['class'=>'form-control','placeholder'=>'nidn'])}}</td>
  </tr>
  {{ Form::submit('Simpan Data',['class' => 'btn btn-primary'])}}
  {{ Form::button('Kembali',['class'=>'btn btn-warning'])}}
</form>
{{ Form::close() }}
@extends('template.footer')