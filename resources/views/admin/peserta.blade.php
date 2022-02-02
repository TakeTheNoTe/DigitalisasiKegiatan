@extends('layouts.admin.peserta')

@section('content')
<div class="container">
                            <h3 class="text-dark mb-4" style="margin-top: 45px;">Daftar Peserta</h3>
                            <div class="card shadow">
                                <div class="card-body">
                                    <span>{{$users->links()}}</span>
                                    <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                        <!-- daftar peserta -->
                                        <table class="table dataTable my-0">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Username</th>
                                                    <th class="text-center">Password</th>
                                                    <th class="text-center">email</th>
                                                    <th class="text-center">Nama</th>
                                                    <th class="text-center">Fakultas</th>
                                                    <th class="text-center">Jenis Kelamin</th>
                                                    <th class="text-center">Pendidikan</th>
                                                    <th class="text-center">Opsi</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tbpeserta">
                                                @foreach ($users as $i)
                                            <tr>
                                                <td class="text-center"><span class="d-inline-block text-truncate" style="max-width: 120px;">{{$i->username}}</td>
                                                <td class="text-center"><span class="d-inline-block text-truncate" style="max-width: 100px;">{{$i->password}}</td>
                                                <td class="text-center"><span class="d-inline-block text-truncate" style="max-width: 140px;">{{$i->email}}</td>
                                                <td class="text-center"><span class="d-inline-block text-truncate" style="max-width: 120px;">{{$i->name}}</td>
                                                <td class="text-center"><span class="d-inline-block text-truncate" style="max-width: 120px;">{{$i->faculty}}</td>
                                                <td class="text-center">{{$i->gender}}</td>
                                                <td class="text-center"><span class="d-inline-block text-truncate" style="max-width: 120px;">{{$i->degree}}</td>
                                                <td class="text-center"><b><a href="edit/{{$i->id}}">Ganti</a></b>&nbsp; &nbsp;<b><a href="delete/{{$i->id}}">Hapus</a></b></td>
                                            </tr>
                                                @endforeach
                                            </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
@endsection