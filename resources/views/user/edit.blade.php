@extends('layouts.default')
@section('title', __( 'Edit Pengguna' ))
@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
        	<div class="card">
                <div class="header">
                    <h2>
                        Edit Pengguna
                    </h2>
                    <ul class="header-dropdown m-r--5">
                    </ul>
                </div>
                <div class="body">
                	@include('layouts.partials.notification')
                    <form method="POST" action="{{ URL::to('/do-update-user/'.$data->id) }}">
                    	@csrf
                        <div class="col-md-6">
                            <label>Nama</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Nama" name="nama" required="" value="{{ $data->nama }}">
                                </div>
                            </div>
                        </div>
                         <div class="col-md-6">
                            <label>Email</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="email" class="form-control" placeholder="Email" name="email" required="" value="{{ $data->email }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Username</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Username" name="username" required="" value="{{ $data->username }}">
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="hashpass" value="{{ $data->password }}">
                        <div class="col-md-6">
                            <label>Password</label>  <span style="color: red; font-size: 12px; font-weight: normal;margin-left: 20px;">*Isi field dibawah untuk merubah password</span>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="password" class="form-control" placeholder="Password" name="password"  value="">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label>Role</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <select name="role" class="form-control" required>
                                        <option value="" disabled selected>-- Pilih Role --</option>
                                        <option value="admin" <?php if($data->role == 'admin'){echo "selected";}?>>Admin</option>
                                        <option value="user" <?php if($data->role == 'user'){echo "selected";}?>>User</option>
                                    </select>
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