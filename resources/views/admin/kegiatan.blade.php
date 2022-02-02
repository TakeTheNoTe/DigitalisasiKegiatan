@extends('layouts.admin.kegiatan')

@section('content')
<div class="container">

                            <h3 class="text-dark mb-4" style="margin-top: 45px;">Daftar Kegiatan</h3>
                            <div class="card shadow">
                                <div class="card-body">
                                    <form method="GET" action="{{ url('tambahkegiatan') }}">
                                        <nav class="navbar">
                                            <form class="form-inline">
                                                <button type="submit" class="btn btn-link" id = "insert-data" ><b>Tambah Kegiatan</b></button><span>{{$activities->links()}}</span>
                                            </form>
                                        </nav>
                                    </form>
                                    <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                        <!-- daftar peserta -->
                                        <table class="table dataTable my-0">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Nama</th>
                                                    <th class="text-center">Tanggal</th>
                                                    <th class="text-center">Jam Mulai</th>
                                                    <th class="text-center">Jam Selesai</th>
                                                    <th class="text-center">Kuota</th>
                                                    <th class="text-center">Tanggal Buka</th>
                                                    <th class="text-center">Tanggal Tutup</th>
                                                    <th class="text-center">Opsi</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tbkegiatan">
                                                @foreach($activities as $i)
                                                <tr>
                                                    <td class="text-center"><span class="d-inline-block text-truncate" style="max-width: 120px;">{{$i->name}}</td>
                                                    <td class="text-center">{{date('d-m-Y', strtotime($i->date))}}</td>
                                                    <td class="text-center">{{$i->start_time}}</td>
                                                    <td class="text-center">{{$i->end_time}}</td>
                                                    <td class="text-center">{{$i->participants}}</td>
                                                    <td class="text-center">{{date('d-m-Y', strtotime($i->open_date))}}</td>
                                                    <td class="text-center">{{date('d-m-Y', strtotime($i->close_date))}}</td>
                                                    <td class="text-center"><b><a href="{{$i->link}}">Link</a></b>&nbsp; &nbsp;<b><a href="lihatk/{{$i->id}}">Presensi</a></b>&nbsp; &nbsp;<b><a href="editk/{{$i->id}}">Ganti</a></b>&nbsp; &nbsp;<b><a href="deletek/{{$i->id}}">Hapus</a></b></td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
@endsection