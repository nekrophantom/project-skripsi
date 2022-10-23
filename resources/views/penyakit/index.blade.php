@extends('layouts.default')
@section('title', __( 'Penyakit' ))
@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Daftar Penyakit
                </h2>
                @if(session('auth_user')['role'] == 'admin')
                <ul class="header-dropdown m-r--5">
                    <a href="{{ URL::to('/tambah-penyakit') }}" class="btn btn-success">Tambah Penyakit</a>
                </ul>
                @endif
            </div>
            <div class="body">
            	@include('layouts.partials.notification')
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-exportable dataTable">
                        <thead>
                            <tr>
                            	<th style="width: 10px;">No</th>
                                <th>Kode</th>
                                <th>Nama Penyakit</th>
                                <th>Penyebab</th>
                                <th>Solusi</th>
                                @if(session('auth_user')['role'] == 'admin')
                                <th></th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($data AS $key => $value)
                        		<tr>
                        			<td>{{ $loop->iteration }}</td>
                                    <td>{{ $value->kode_penyakit }}</td>
                                    <td>{{ $value->nama_penyakit }}</td>
                                    <td>{{ $value->penyebab }}</td>
                        			<td>{{ $value->solusi }}</td>
                                    @if(session('auth_user')['role'] == 'admin')
                                    <td>
                                        
                                        <a href="{{ URL::to('edit-penyakit/'.$value->id) }}" class="btn btn-warning">Edit</a>
                                        <a href="{{ URL::to('delete-penyakit/'.$value->id) }}" class="btn btn-danger" onclick="return confirm('Apakah anda yakin.?')">Hapus</a>

                                        
                                    </td>
                                    @endif
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


