@extends('layouts.register')

@section('content')

<div class="container">
    <h3 class="text-dark mb-4" style="margin-top: 45px;">Daftar</h3>
    <div class="row mb-3">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow mb-3">
                    <div class="card-body">
                    <form method="POST" action="{{ route('tambahpeserta.store') }}">
                        @csrf
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><label for="name"><strong>Nama Peserta</strong></label>
                             <input class="form-control" name="name" type="text">
                            </div>
                         </div>
                    </div>
                     <div class="form-row">
                        <div class="col">
                            <div class="form-group"><label for="email"><strong>Email Peserta</strong></label>
                             <input class="form-control" name="email" type="text">
                            </div>
                         </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><label for="username"><strong>Username</strong></label>
                             <input class="form-control" name="username" type="text">
                            </div>
                         </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><label for="password"><strong>Password</strong></label>
                             <input class="form-control" name="password" type="text">
                            </div>
                         </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><label for="degree"><strong>Pendidikan</strong></label>
                             <select class="form-control"  name="degree">
                                <option value="Sarjana 1">Sarjana 1</option>
                                <option value="Sarjana 2">Sarjana 2</option>
                                <option value="Sarjana 3">Sarjana 3</option>
                            </select>
                            </div>
                         </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><label for="faculty"><strong>Fakultas</strong></label>
                             <select class="form-control"  name="faculty" id="fakul">
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
                        <div>
                            <div class="form-group"><label for="gender"><strong>Jenis Kelamin</strong></label>
                            <br>
                             <input name="gender" type="radio" value="Pria">&nbsp;Pria
                             <br>
                             <input name="gender" type="radio" value="Wanita">&nbsp;Wanita
                            </div>
                         </div>
                    </div>
                    <div class="form-group"><button class="btn btn-primary btn-sm" type="submit" name="tambahpeserta">{{ __('Tambah') }}</button></div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection