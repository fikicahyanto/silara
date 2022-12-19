{{ Form::open(array('url' => 'mahasiswa', 'files' => true, 'enctype' => 'multipart/form-data', 'method' => 'POST')) }}
@csrf
  <div class="form-group row">
    <label for="nim" class="col-sm-2 col-form-label col-form-label-sm">Nim</label>
    <div class="col-sm-10">
      <input type="text" id="nim" name="nim" class="form-control @error('nim') is-invalid @enderror" value="{{old('nim')}}" placeholder="nim">
            @error('nim')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nama Mahasiswa</label>
    <div class="col-sm-10">
      <input type="text" id="nama_mahasiswa" name="nama_mahasiswa" class="form-control @error('nama_mahasiswa') is-invalid @enderror" value="{{old('nama_mahasiswa')}}" placeholder="Nama mahasiswa">
        @error('nama_mahasiswa')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
    </div>
  </div>
  <div class="form-group row">
    <label for="formFile" class="col-sm-2 col-form-label col-form-label-sm">File Upload</label>
    <div class="col-sm-10">
    {{ FORM::file('files',null,['id' => 'formFile','class'=>'form-control','placeholder'=> 'file'])}}
    </div>
  </div>  
</div>
  <div class="modal-footer">
    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
    {{ Form::submit('Save',['class' => 'btn btn-primary'])}}             
    {{ Form::close() }}
