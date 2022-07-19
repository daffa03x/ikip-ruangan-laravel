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
                        <h3 class="card-title">Tambah Prodi</h3>
                        <form class="mt-4" method="POST" action="{{ url('admin/prodi/'.$data->id) }}">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="">Fakultas</label>
                                <select class="form-control text-center" name="fakultas">
                                    @foreach($fakultas as $f)
                                    @if(old('fakultas',$data->fakultas_id) == $f->id)
                                    <option value="{{ $f->id }}" selected>{{ $f->nama }}</option>
                                    @else
                                    <option value="{{ $f->id }}">{{ $f->nama }}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Prodi</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ $data->nama }}">
                                @error('nama')
                                <div class="invalid-feedback">
                                    {{ $validation.required }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                                <a href="{{ url('admin/prodi') }}" class="btn btn-primary">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection