@extends('layouts.dashboard')
@push('data-table-css')
    <link rel="stylesheet" href="{{ asset('vendor/css/datatables.net-bs4/css/dataTables.bootstrap4.css') }}">
@endpush
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@section('content')
            <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                    <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Ruangan</h3>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="{{ url('admin/fakultas/create') }}" class="btn btn-primary mb-3 px-3">Tambah</a>
                                    </div>
                                    {{-- <div class="col-lg-6 d-flex justify-content-end">
                                        <a href="" class="btn btn-danger mb-3 px-3 mr-2">PDF</a>
                                        <a href="" class="btn btn-success mb-3 px-3">Excel</a>
                                    </div> --}}
                                </div>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap text-center">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Fakultas</th>
                                                <th>Ruangan</th>
                                                <th>Lantai</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->fakultas->nama }}</td>
                                                <td>{{ $item->nama }}</td>
                                                <td>{{ $item->lantai }}</td>
                                                <td>
                                                <form method="POST" class="d-inline" action="{{ url('admin/fakultas/'.$item->id) }}">
                                                @csrf
                                                <a class="btn btn-warning ml-1 text-light" href="{{ url('admin/fakultas/'.$item->id.'/edit') }}">Edit</a>
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button type="submit" class="btn btn-xs btn-danger show_confirm" data-toggle="tooltip" title='Delete'>Hapus</button>
                                                </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
<script>
    $('.show_confirm').click(function(event) {
         var form =  $(this).closest("form");
         var name = $(this).data("name");
         event.preventDefault();
         swal({
             title: "Apakah Anda Yakin Akan Hapus Data ? ",
             text: "Jika Dihapus Data Akan Hilang",
             icon: "warning",
             buttons: true,
             dangerMode: true,
         })
         .then((willDelete) => {
           if (willDelete) {
             form.submit();
           }else{
               swal("Data Tidak Jadi dihapus");
           }
         });
     });                        
   </script>
<script>
    @if(Session::has('message'))
  swal({
    title: "Success",
    text: "{{ session('message') }}",
    icon: "success",
  });
  @endif
</script>
@endsection
@push('data-table-js')
    <script src="{{ asset('vendor/js/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/js/pages/datatable/datatable-basic.init.js') }}"></script>
@endpush