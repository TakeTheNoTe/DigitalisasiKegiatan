@extends('layouts.admin.evaluasi')

@section('content')
<div class="container">

                            <h3 class="text-dark mb-4" style="margin-top: 45px;">Daftar Pertanyaan Evaluasi</h3>
                            <div class="card shadow">
                                <div class="card-body">
                                    <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                        <!-- daftar peserta -->
                                        <table class="table dataTable my-0">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Pertanyaan</th>
                                                    <th class="text-center">Opsi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($question as $i)
                                                <tr>
                                                    <td class><span class="d-inline-block text-truncate" style="max-width: 1000px;"><b>{{$i->question}}</b></td>
                                                    <td class="text-center"><a href="editpertanyaan/{{$i->id}}/{{$i->question}}"><b>Ganti</b></a></td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <h3 class="text-dark mb-4" style="margin-top: 45px;">Hasil Evaluasi</h3>
                                <div class="card shadow">
                                <div class="card-body">
                                    <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info"><span>{{$activities->links()}}</span>
                                        <!-- daftar peserta -->
                                        <table class="table dataTable my-0">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Kegiatan</th>
                                                    <th class="text-center">Opsi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($activities as $i)
                                                <tr>
                                                    <td><b>{{$i->name}}</b></td>
                                                    <td class="text-center"><b><a href="lihatev/{{$i->id}}">Lihat</a></b></td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
@endsection