@extends('layouts.default')
@section('title', __( 'Edit Rules' ))
@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
        	<div class="card">
                <div class="header">
                    <h2>
                        Edit Rules
                    </h2>
                    <ul class="header-dropdown m-r--5">
                    </ul>
                </div>
                <div class="body">
                	@include('layouts.partials.notification')
                    <form method="POST" action="{{ URL::to('/do-update-rules/'.$data->id) }}">
                    	@csrf
                        
                        <label>Penyakit</label>
                        <div class="form-group">
                            <div class="form-line">
                                <select class="form-control" name="penyakit_id" required="">
                                    <option value="" disabled selected>-- Pilih Penyakit --</option>
                                    @foreach($penyakit AS $vp)
                                        <option value="{{ $vp->id }}" <?php if($data->penyakit_id == $vp->id){echo 'selected';}?>>{{ $vp->nama_penyakit }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <label>Gejala</label>
                        <div class="form-group">
                            <div class="form-line">
                                <select class="form-control" name="gejala_id" required="">
                                    <option value="" disabled selected>-- Pilih Gejala --</option>
                                    @foreach($gejala AS $vg)
                                        <option value="{{ $vg->id }}" <?php if($data->gejala_id == $vg->id){echo 'selected';}?>>{{ $vg->nama_gejala }}</option>
                                    @endforeach
                                </select>
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
