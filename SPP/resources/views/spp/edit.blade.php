@extends('template.master');

@section('title', 'edit Data spp')

@section('content')
<form action="{{ route('spp.update',$spp->id_spp ) }}" method="POST">
        @csrf
        @method('PUT')
<div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">EDIT SPP</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label>tahun</label>
                    <input type="text" name="tahun" class="form-control @error('tahun') {{'is-invalid'}}" @enderror value={{$spp->tahun}}">
                    <label>nominal</label>
                    <input type="text" name="nominal" class="form-control @error('nominal') {{'is-invalid'}}" @enderror value={{$spp->nominal}}">
                  </div>
                  @error('tahun')
            <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
                 @enderror
                 @error('nominal')
            <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
                 @enderror
                  <div class="card-footer">
                  <button type="submit" class="btn btn-primary">update</button>
                </div>
              </form>
            </div>
              
            
                  
</body>
</html>