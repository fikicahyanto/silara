{{ Form::open(array('url' => 'dosen', 'method' => 'POST')) }}
@csrf
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">NIDN</label>
    <div class="col-sm-10">
    {{ FORM::text('nidn',null,['class'=>'form-control','placeholder'=>'Nidn'])}}
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nama Dosen</label>
    <div class="col-sm-10">
    {{ FORM::text('nama_dosen',null,['class'=>'form-control','placeholder'=>'Nama Dosen'])}}
    </div>
  </div>
  <div class="form-group row">
    <label for="formFile" class="col-sm-2 col-form-label col-form-label-sm">Upload File</label>
    <div class="col-sm-10">
      <input class="form-control" type="file" id="formFile">
    </div>
  </div>
