@extends('template.master');

@section('title', 'Tambah Data Spp')

@section('content')
<form action="{{ route('spp.store') }}" method="POST">
        @csrf
<div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">tahun</label>
                    <input type="text" name="tahun" class="form-control @error('tahun') {{'is-invalid'}} @enderror" id="exampleInputEmail1" placeholder="Masukan Tahun">
                    <label for="exampleInputEmail1">nominal</label>
                    <input type="text" name="nominal" class="form-control @error('nominal') {{'is-invalid'}} @enderror" id="exampleInputEmail1" placeholder="Masukan Nominal">
                  </div>
                  @error('tahun')
            <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
                 @enderror
                 @error('nominal')
            <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
                 @enderror
                  <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
              
            
                  
</body>
</html>