@extends('layouts.user.kegiatan')

@section('content')
<div class="container">

                            <h3 class="text-dark mb-4" style="margin-top: 45px;">Daftar Kegiatan</h3>
                            <div class="card shadow">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Kegiatan</h5><span>{{$activities->links()}}</span>
                                    <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                        <!-- daftar peserta -->
                                        <table class="table dataTable my-0">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Nama</th>
                                                    <th class="text-center">Jam Mulai</th>
                                                    <th class="text-center">Jam Selesai</th>
                                                    <th class="text-center">Tanggal</th>
                                                    <th class="text-center">Tanggal Buka</th>
                                                    <th class="text-center">Tanggal Tutup</th>
                                                    <th class="text-center">Kuota</th>
                                                    <th class="text-center">Opsi</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tbkegiatan">
                                                @foreach($activities as $i)
                                                <tr>
                                                    <td class="text-center"><span class="d-inline-block text-truncate" style="max-width: 120px;">{{$i->name}}</td>
                                                    <td class="text-center">{{$i->start_time}}</td>
                                                    <td class="text-center">{{$i->end_time}}</td>
                                                    <td class="text-center">{{date('d-m-Y', strtotime($i->date))}}</td>
                                                    <td class="text-center">{{date('d-m-Y', strtotime($i->open_date))}}</td>
                                                    <td class="text-center">{{date('d-m-Y', strtotime($i->close_date))}}</td>
                                                    <td class="text-center">{{$i->participants}}</td>
                                                    <td class="text-center"><a href="daftar/{{$i->id}}, {{$i->name}}, {{$user->id}}, {{$user->name}}, {{$i->start_time}}, {{$i->end_time}}, {{$i->date}}, {{'mengambil kegiatan'}}">Daftar</a>&nbsp&nbsp<a href="{{$i->link}}">Link</a></td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
@endsection