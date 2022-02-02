@extends('layouts.admin.logactivity')

@section('content')
<div class="container">
	<h3 class="text-dark mb-4" style="margin-top: 45px;">Catatan Aktivitas</h3>
		<div class="card shadow">
                                <div class="card-body">
                                    <nav class="navbar">
                                                <a href="delog"><b>Bersihkan</b></a><span>{{$logs->links()}}</span>
                                        </nav>
	                                    <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                        <!-- daftar peserta -->
                                        <table class="table dataTable my-0">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Nama</th>
                                                    <th class="text-center">Kegiatan</th>
                                                    <th class="text-center">Keterangan</th>
                                                    <th class="text-center">Tanggal dan Waktu</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($logs as $i)
                                                <tr>
                                                <th class="text-center">{{$i->participants}}</th>
                                                <th class="text-center">{{$i->activities}}</th>
                                                <th class="text-center">{{$i->description}}</th>
                                                <th class="text-center">{{date('d-m-Y/h:i A', strtotime($i->created_at))}}</th>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
</div>
@endsection