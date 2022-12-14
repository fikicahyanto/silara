{{ Form::open(array('url' => 'dosen/update/'.$lecture->id, 'files' => true, 'enctype' => 'multipart/form-data', 'method' => 'POST')) }}
@csrf
    <div class="form-group row">
        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">NIDN</label>
        <div class="col-sm-10">
        <input type="hidden" id="id" name="id">
            {{ FORM::text('nidn',$lecture->nidn,['id' => 'nidn','class'=>'form-control','placeholder'=>'nidn'])}}
        </div>
    </div>
    <div class="form-group row">
        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">NAMA DOSEN</label>
        <div class="col-sm-10">
            {{ FORM::text('nama_dosen',$lecture->nama_dosen,['id' => 'nama_dosen','class'=>'form-control','placeholder'=>'nama dosen'])}}
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
    