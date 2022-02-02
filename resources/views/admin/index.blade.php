@extends('layouts.admin.profile')

@section('content')
<div class="container">
<h3 class="text-dark mb-4">Profile</h3>
    <div class="row mb-3">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow mb-3">
                        <div class="card-header py-3">
                        <p class="text-primary m-0 font-weight-bold">Pengaturan Admin</p>
                        </div>
                    <div class="card-body">
                    <form method="POST" action="{{ route('admin.update') }}">
                        {{csrf_field()}}
                        {{method_field('PUT')}}
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><label for="idadmin"><strong>ID</strong></label>
                             <input class="form-control" name="id" value="{{ Auth::user()->id }}" type="text" readonly>
                            </div>
                         </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><label for="username"><strong>Username</strong></label>
                             <input class="form-control" name="username" value="{{ Auth::user()->username }}">
                            </div>
                         </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><label for="email"><strong>Email</strong></label>
                             <input class="form-control" name="email" value="{{ Auth::user()->email }}" type="text">
                            </div>
                         </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><label for="password"><strong>Password</strong></label>
                             <input class="form-control" name="password" value="{{ Auth::user()->password }}" type="password">
                            </div>
                         </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><label for="name"><strong>Nama</strong></label>
                             <input class="form-control" name="name" value="{{ Auth::user()->name }}" type="text">
                            </div>
                         </div>
                    </div>
                    <div class="form-group"><button class="btn btn-primary btn-sm" type="submit" name="editprofile">{{ __('Simpan Perubahan') }}</button></div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
