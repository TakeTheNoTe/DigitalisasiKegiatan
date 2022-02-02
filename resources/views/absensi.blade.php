@extends('layouts.user.absensi')

@section('content')
<div class="container">
  <h3 class="text-dark mb-4" style="margin-top: 45px;">Presensi</h3>
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center">Absen Masuk</h5>
        <table class="table dataTable my-0">
            <thead>
                <tr>
                  <th class="text-center">Kegiatan</th>
                  <th class="text-center">Tanggal</th>
                  <th class="text-center">Jam Mulai</th>
                  <th class="text-center">Opsi</th>
                </tr>
            </thead>
            <tbody>
               @foreach($activities as $i)
              <tr>
                <td class="text-center"><span class="d-inline-block text-truncate" style="max-width: 100px;">{{$i->activities}}</td>
                <td class="text-center">{{date('d-m-Y', strtotime($i->date))}}</td>
                <td class="text-center">{{$i->start_time}}</td>
                <th class="text-center"><a href="absenm/{{$i->id_activities}}/{{$i->id_participants}}/{{$i->activities}}/{{$i->participants}}/{{'masuk'}}/{{'tunggu'}}/{{'melakukan absensi masuk'}}">Absen</a></th>
              </tr>
              @endforeach
            </tbody>
          </table>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center">Absen Keluar</h5>
        <table class="table dataTable my-0">
            <thead>
                <tr>
                  <th class="text-center">Kegiatan</th>
                  <th class="text-center">Tanggal</th>
                  <th class="text-center">Jam Selesai</th>
                  <th class="text-center">Opsi</th>
                </tr>
            </thead>
            <tbody>
               @foreach($activities as $i)
              <tr>
                <td class="text-center"><span class="d-inline-block text-truncate" style="max-width: 100px;">{{$i->activities}}</td>
                <td class="text-center">{{date('d-m-Y', strtotime($i->date))}}</td>
                <td class="text-center">{{$i->end_time}}</td>
                <th class="text-center"><a href="absenk/{{$i->id_activities}}/{{$i->id_participants}}/{{$i->activities}}/{{$i->participants}}/{{'keluar'}}/{{'tunggu'}}/{{'melakukan absensi keluar'}}" value="keluar">Absen</a></th>
              </tr>
              @endforeach
            </tbody>
          </table>
      </div>
    </div>
  </div>
</div>
<br>
<div class="card w-74">
  <div class="card-body">
    <h5 class="card-title text-center">Status Presensi</h5><span>{{$attendances->links()}}</span>
    <table class="table dataTable my-0">
            <thead>
                <tr>
                  <th class="text-center">Kegiatan</th>
                  <th class="text-center">Tanggal Dan Jam</th>
                  <th class="text-center">Status Absen</th>
                  <th class="text-center">Status Konfirmasi</th>
                </tr>
            </thead>
            <tbody>
            	@foreach($attendances as $a)
            	<tr>
                <td class="text-center"><span class="d-inline-block text-truncate" style="max-width: 100px;">{{$a->activities}}</td>
                <td class="text-center">{{date('d-m-Y/h:i A', strtotime($a->created_at))}}</td>
                <td class="text-center">{{$a->status_request}}</td>
                <td class="text-center">{{$a->status}}</td>
              </tr>
            	@endforeach
            </tbody>
          </table>
  </div>
</div>
</div>

@endsection