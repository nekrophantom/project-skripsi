@extends('layouts.default')
@section('title', __( 'Rules' ))
@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Daftar Rules
                </h2>
                <ul class="header-dropdown m-r--5">
                    <a href="{{ URL::to('/tambah-rules') }}" class="btn btn-success">Tambah Rules</a>
                </ul>
            </div>
            <div class="body">
                @include('layouts.partials.notification')
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-exportable dataTable">
                        <thead>
                            <tr>
                                <th style="width: 10px;">No</th>
                                <th>Penyakit</th>
                                <th>Gejala</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data AS $key => $value)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $value->nama_penyakit }}</td>
                                    <td>{{ $value->nama_gejala }}</td>
                                    <td>
                                        <a href="{{ URL::to('edit-rules/'.$value->id) }}" class="btn btn-warning">Edit</a>
                                        <a href="{{ URL::to('delete-rules/'.$value->id) }}" class="btn btn-danger" onclick="return confirm('Apakah anda yakin.?')">Hapus</a>
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
@endsection


