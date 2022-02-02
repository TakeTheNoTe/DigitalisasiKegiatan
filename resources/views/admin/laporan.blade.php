@extends('layouts.admin.laporan')

@section('content')
<div class="container">
	<h3 class="text-dark mb-4" style="margin-top: 45px;">Laporan</h3>
                            <div class="card shadow">
                                <div class="card-body">
                                	<table class="table my-0">
            					<thead>
                					<tr>
                  					<th class="text-center">Laporan</th>
                  					<th class="text-center">Opsi</th>
                					</tr>
            					</thead>
            					<tbody>
            						<tr>
            						      <td class="text-left">Chart Total Peserta Berdasarkan Jenis Kelamin</td>
            						      <td class="text-center"><b><a href="laporanjk">Lihat</a></b></td>
            						</tr>
                                    <tr>
                                        <td class="text-leftr">Chart Hasil Evaluasi Semua Kegiatan</td>
                                        <td class="text-center"><b><a href="laporanevkeg">Lihat</a></b></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Chart Tingkat Pendidikan Pada Peserta</td>
                                        <td class="text-center"><b><a href="laporanpendik">Lihat</a></b></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Chart Jumlah Peserta Dalam Fakultas Yang Mengambil Kegiatan</td>
                                        <td class="text-center"><b><a href="laporanfakul">Lihat</a></b></td>
                                    </tr>
            					</tbody>
          							</table>
        						</div>
                            </div>
                        </div>
@endsection