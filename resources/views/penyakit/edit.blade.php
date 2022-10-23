@extends('layouts.default')
@section('title', __( 'Edit Penyakit' ))
@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
        	<div class="card">
                <div class="header">
                    <h2>
                        Edit Penyakit
                    </h2>
                    <ul class="header-dropdown m-r--5">
                    </ul>
                </div>
                <div class="body">
                	@include('layouts.partials.notification')
                    <form method="POST" action="{{ URL::to('/do-update-penyakit/'.$data->id) }}">
                    	@csrf
                        <div class="col-md-6">
                            <label>Kode Penyakit</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Kode Penyakit" name="kode_penyakit" value="{{ $data->kode_penyakit }}" required="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Nama Penyakit</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Nama Penyakit" name="nama_penyakit" value="{{ $data->nama_penyakit }}" required="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Penyebab</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Penyebab" name="penyebab" value="{{ $data->penyebab }}" required="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Solusi</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Solusi" name="solusi" value="{{ $data->solusi }}" required="">
                                </div>
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary waves-effect">
                        	<i class="material-icons">save</i>
	                        <span>SIMPAN</span>
	                    </button>
                    </form>
                </div>
            </div>
    	</div>
    </div>
</div>
@endsection
