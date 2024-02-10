@extends('template.master')

@push('css')
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('title', 'Data spp')

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <a href="{{ route('spp.create') }}" class="btn btn-sm btn-outline-primary">
          <i class="fa fa-plus"> spp</i>
        </a>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="table" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Namamu</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($spp as $key => $value)
              <tr>
                <td>
                  {{ $key + 1 }}
                </td>
                <td>
                  {{ $value->id_spp}}
                </td>
                <td>
                  {{ $value->tahun}}
                </td>
                <td>
                  {{ $value->nominal}}
                </td>
                <td>
                  <a href="{{ route('spp.edit', $value->id_spp) }}" class="btn btn-sm btn-info">
                    Edit
                  </a>
                  <form action="{{route('spp.destroy', $value->id_spp)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <input type="submit" class="btn btn-sm btn-danger" style="display: inline" value="hapus">

                  </form>
                </td>              
              </tr>
            @empty
              <tr>
                <td>Data Masih Kosong</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
</div>
@endsection

@push('js')
  <script src="{{ asset('AdminLTE/plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('AdminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('AdminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('AdminLTE/plugins/jszip/jszip.min.js') }}"></script>
  <script src="{{ asset('AdminLTE/plugins/pdfmake/pdfmake.min.js') }}"></script>
  <script src="{{ asset('AdminLTE/plugins/pdfmake/vfs_fonts.js') }}"></script>
  <script src="{{ asset('AdminLTE/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
  <script src="{{ asset('AdminLTE/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
  <script src="{{ asset('AdminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>


@endpush