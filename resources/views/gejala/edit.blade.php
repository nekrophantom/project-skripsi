@extends('layouts.default')
@section('title', __( 'Edit Gejala' ))
@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
        	<div class="card">
                <div class="header">
                    <h2>
                        Edit Gejala
                    </h2>
                    <ul class="header-dropdown m-r--5">
                    </ul>
                </div>
                <div class="body">
                	@include('layouts.partials.notification')
                    <form method="POST" action="{{ URL::to('/do-update-gejala/'.$data->id) }}">
                    	@csrf
                        <label>Kode Gejala</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Kode Gejala" name="kode_gejala" value="{{ $data->kode_gejala }}" required="">
                            </div>
                        </div>
                        <label>Nama Gejala</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Nama Gejala" name="nama_gejala" value="{{ $data->nama_gejala }}" required="">
                            </div>
                        </div>
                        <label>Nilai</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Nilai" name="nilai" value="{{ $data->nilai }}" required="">
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
