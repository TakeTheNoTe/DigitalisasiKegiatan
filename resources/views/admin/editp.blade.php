@extends('layouts.admin.peserta')

@section('content')

<div class="container">
    <div class="row mb-3">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow mb-3">
                        <div class="card-header py-3">
                        <p class="text-primary m-0 font-weight-bold">Ganti Data Peserta<a href="{{ route('peserta.index') }}" style="margin-left: 860px">{{ __('Kembali') }}</a></p>
                        </div>
                    <div class="card-body">
                    <form method="POST" action="{{ url('update/'.$user->id) }}">
                        {{csrf_field()}}
                        {{method_field('PUT')}}

                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><label><strong>Nama</strong></label>
                             <input class="form-control" name="name" value="{{$user->name}}">
                            </div>
                         </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><label><strong>Email</strong></label>
                             <input class="form-control" name="email" value="{{$user->email}}" type="text" readonly>
                            </div>
                         </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><label><strong>Username</strong></label>
                             <input class="form-control" name="username" value="{{$user->username}}" type="text">
                            </div>
                         </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><label><strong>Password</strong></label>
                             <input class="form-control" name="password" value="{{$user->password}}" type="text">
                            </div>
                         </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><label><strong>Pendidikan</strong></label>
                             <input class="form-control" name="degree" value="{{$user->degree}}" type="text">
                            </div>
                         </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><label for="faculty"><strong>Fakultas</strong></label>
                             <select class="form-control"  name="faculty">
                                <option selected>{{$user->faculty}}</option>
                                <option value="Fakultas Bahasa dan Seni">Fakultas Bahasa dan Seni</option>
                                <option value="Fakultas Biologi">Fakultas Biologi</option>
                                <option value="Fakultas Ekonomika dan Bisnis">Fakultas Ekonomika dan Bisnis</option>
                                <option value="Fakultas Hukum">Fakultas Hukum</option>
                                <option value="Fakultas Ilmu Sosial dan Komunikasi">Fakultas Ilmu Sosial dan Komunikasi</option>
                                <option value="Fakultas Interdisiplin">Fakultas Interdisiplin</option>
                                <option value="Fakultas Keguruan dan Ilmu Pendidikan">Fakultas Keguruan dan Ilmu Pendidikan</option>
                                <option value="Fakultas Kedokteran dan Ilmu Kesehatan">Fakultas Kedokteran dan Ilmu Kesehatan</option>
                                <option value="Fakultas Ilmu Pertanian dan Bisnis">Fakultas Ilmu Pertanian dan Bisnis</option>
                                <option value="Fakultas Psikologi">Fakultas Psikologi</option>
                                <option value="Fakultas Sains dan Matematika">Fakultas Sains dan Matematika</option>
                                <option value="Fakultas Teknik Elektro dan Komputer">Fakultas Teknik Elektro dan Komputer</option>
                                <option value="Fakultas Teknologi Informasi">Fakultas Teknologi Informasi</option>
                                <option value="Fakultas Teologi">Fakultas Teologi</option>
                            </select>
                            </div>
                         </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><label><strong>Jenis Kelamin</strong></label><br>
                             <select class="form-control" name="gender">
                                <option selected>{{$user->gender}}</option>
                                <option value="Pria">Pria</option>
                                <option value="Wanita">Wanita</option>
                            </select>
                            </div>
                         </div>
                    </div>
                    <div class="form-group"><button class="btn btn-primary btn-sm" type="submit">{{ __('Simpan Perubahan') }}</button></div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection