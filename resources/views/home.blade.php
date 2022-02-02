@extends('layouts.user.profile')

@section('content')

<div class="container">
<!-- Modal -->
<div class="modal fade" id="gantipassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Ganti Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="{{ url('/gantipassword/'.$user->id.'/'.$user->name.'/'.'Ganti Password'.'/'.'mengganti password') }}">
        {{csrf_field()}}
        {{method_field('PUT')}}
      <div class="modal-body">
        Masukan Password Baru
        <input type="text" name="password" class="form-control">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- EndModal -->
<!-- Modal -->
<div class="modal fade" id="link" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Ganti Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- EndModal -->

<h3 class="text-dark mb-4">Profile</h3>
    <div class="row mb-3">
        <div class="col-lg-12">
            <div class="row">
  <div class="col-sm-6 te">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center">Data Pribadi</h5>
        <b class="card-text"> Nama          : </b> {{ $user->name }}<br>
        <b class="card-text"> Pendidikan    : </b> {{ $user->degree }}<br>
        <b class="card-text"> Jenis Kelamin : </b> {{ $user->gender }}<br>
        <b class="card-text"> Fakultas       : </b> {{ $user->faculty }}<br>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center">Data Akun</h5>
        <b class="card-text"> Terdaftar Pada Tanggal  : </b> {{date('d-m-Y', strtotime($user->created_at))}}<br>
        <b class="card-text"> Email                   : </b> {{ $user->email }}<br>
        <b class="card-text"> Username                : </b> {{ $user->username }}<br>
        <b class="card-text"> Password                : </b> <b>{{ $user->password }}</b>&nbsp&nbsp<b><a href="#" data-toggle="modal" data-target="#gantipassword">Ganti Password</a></b><br>
      </div>
    </div>
  </div>
</div>
<br>
  <div class="card w-74">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center">Kegiatan</h5><span>{{$dact->links()}}</span>
        <table class="table my-0">
            <thead>
                <tr>
                  <th class="text-center">Nama</th>
                  <th class="text-center">Tanggal</th>
                  <th class="text-center">Jam Mulai</th>
                  <th class="text-center">Jam Selesai</th>
                  <th class="text-center">Opsi</th>
                </tr>
            </thead>
            <tbody>
               @foreach($dact as $a)
              <tr>
                <td class="text-center">{{$a->activities}}</td>
                <td class="text-center">{{date('d-m-Y', strtotime($a->date))}}</td>
                <td class="text-center">{{$a->start_time}}</td>
                <td class="text-center">{{$a->end_time}}</td>
                <th class="text-center"><a href="hapusdk/{{$a->id_activities}}/{{$a->id_participants}}">Hapus</a></th>
              </tr>
              @endforeach
            </tbody>
          </table>
      </div>
    </div>
  </div>
    </div>
</div>
</div>
@endsection