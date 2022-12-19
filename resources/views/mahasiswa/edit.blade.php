{{ Form::open(array('url' => 'mahasiswa/update/'.$mhs->id, 'files' => true, 'enctype' => 'multipart/form-data', 'method' => 'POST')) }}
@csrf
    <div class="form-group row">
        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">NIM</label>
        <div class="col-sm-10">
        <input type="hidden" id="id" name="id">
            {{ FORM::text('nim',$mhs->nim,['id' => 'nim','class'=>'form-control','placeholder'=>'nim'])}}
        </div>
    </div>
    <div class="form-group row">
        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">NAMA Mahasiswa</label>
        <div class="col-sm-10">
            {{ FORM::text('nama_mahasiswa',$mhs->nama_mahasiswa,['id' => 'nama_mahasiswa','class'=>'form-control','placeholder'=>'nama mahasiswa'])}}
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
    