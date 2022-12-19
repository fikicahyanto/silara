{{ Form::open(array('url' => 'dosen', 'files' => true, 'enctype' => 'multipart/form-data', 'method' => 'POST')) }}
@csrf
  <div class="form-group row">
    <label for="nidn" class="col-sm-2 col-form-label col-form-label-sm">NIDN</label>
    <div class="col-sm-10">
      <input type="text" id="nidn" name="nidn" class="form-control @error('nidn') is-invalid @enderror" value="{{old('nidn')}}" placeholder="Nidn">
    {{-- {{ FORM::text('nidn',null,['class'=>'form-control @error('nidn') is-invalid @enderror','id' => 'nidn','placeholder'=>'Nidn'])}} --}}
            @error('nidn')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nama Dosen</label>
    <div class="col-sm-10">
      <input type="text" id="nama_dosen" name="nama_dosen" class="form-control @error('nama_dosen') is-invalid @enderror" value="{{old('nama_dosen')}}" placeholder="Nama Dosen">
    {{-- {{ FORM::text('nama_dosen',null,['class'=>'form-control','placeholder'=>'Nama Dosen'])}} --}}
        @error('nama_dosen')
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
