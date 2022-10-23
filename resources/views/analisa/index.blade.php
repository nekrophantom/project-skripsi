@extends('layouts.default')
@section('title', __( 'Analisa Penyakit' ))
@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Analisa Penyakit
                </h2>
                
            </div>
            <div class="body">
            	@include('layouts.partials.notification')
                <div class="table-responsive m-b-40">
                    <center><h3>DAFTAR GEJALA</h3></center>
                    <form method="post" action="{{ URL::to('do-add-analisa') }}">
                        @csrf
                        <input type="hidden" name="id_user" value="{{ $dataLogin['id'] }}">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Pertanyaan</th>
                                    <th>Bobot</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($gejala as $gk => $g)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <!--<td>{{ $g->kode_gejala }}</td>-->
                                        <td>{{ $g->nama_gejala }}</td>
                                        <td>
                                            <select class="form-control" name="bobot[{{ $g->id }}]">
                                                @foreach ($bobot as $bk => $b)
                                                    <option value="{{$b->bobot }}">{{ $b->keterangan }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-danger" style="float: right;">Analisa</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


