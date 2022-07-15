@extends('layouts.dashboard')

@section('content')
<div class="page-wrapper">
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-sm-12 col-md-8 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Tambah Angkatan</h3>
                    <form class="mt-4" method="POST" action="{{ url('admin/angkatan/'.$data->id) }}">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="">Tahun Angkatan</label>
                            <input type="text" name="thn_angkatan" value="{{ $data->thn_angkatan }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                            <a href="{{ url('admin/angkatan') }}" class="btn btn-primary">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection