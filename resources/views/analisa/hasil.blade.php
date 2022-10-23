@extends('layouts.default')
@section('title', __( 'Analisa Penyakit' ))
@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Hasil Analisa ({{ $dataLogin['nama'] }}) - {{ $detailData->created_at }}
                </h2>
                
            </div>
            <div class="body">
            	@include('layouts.partials.notification')
                <center><h3>Diagnosis Gejala</h3></center>
                <div class="table-responsive m-b-40">
                    <table class="table table-bordered table-striped table-hover ">
                        <thead>
                            <tr>
                                <th style="width: 10px;">No</th>
                                <th>Kode</th>
                                <th>Gejala</th>
                                <th>Bobot User</th>
                                <th>Bobot Pakar</th>
                                <th>CF</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach ($detailData->hasil_analisa['gejala'] as $k => $v) { ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $v['kode_gejala'] ?></td>
                                    <td><?= $v['nama_gejala'] ?></td>
                                    <td><?= $v['nilai_user'] ?></td>
                                    <td><?= $v['nilai'] ?></td>
                                    <td><?= $v['CF'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <br>
                <center><h3>Hasil Akhir</h3></center>
                <div class="table-responsive m-b-40">
                    <table class="table table-bordered table-striped table-hover ">
                        <thead>
                            <tr>
                                <th style="width: 10px;">No</th>
                                <th>Kode</th>
                                <th>Penyakit</th>
                                <th>Solusi</th>
                                <th>Hasil</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach ($rank as $z => $x) { 
                                if($no++ == 1){?>
                                <tr>
                                    <td>1</td>
                                    <td><?= $detailData->hasil_analisa['penyakit'][$z]['kode_penyakit'] ?></td>
                                    <td><?= $detailData->hasil_analisa['penyakit'][$z]['nama_penyakit'] ?></td>
                                    <td><?= $detailData->hasil_analisa['penyakit'][$z]['solusi'] ?></td>
                                    <td><?= round($detailData->hasil_analisa['penyakit'][$z]['hasil_cf_penyakit'],0) ?> %</td>
                                </tr>
                            <?php } }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


