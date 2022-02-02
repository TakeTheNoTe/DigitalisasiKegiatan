@extends('layouts.admin.kegiatan')

@section('content')

<div class="container">
<div class="card w-74">
  <div class="card-body">
    <h5 class="card-title text-center">Detail Absensi Peserta <a href="{{ route('adminkegiatan.index') }}" style="margin-left: 785px">Kembali</a></h5>
    <table class="table dataTable my-0">
            <thead>
                <tr>
                  <th class="text-center">Peserta</th>
                  <th class="text-center">Waktu Absen</th>
                  <th class="text-center">Status Absen</th>
                  <th class="text-center">Status Konfirmasi</th>
                  <th class="text-center">Opsi</th>
                </tr>
            </thead>
            <tbody>
            	@foreach($att as $i)
            	<tr>
            		<input type="hidden" name="id_participants" value="{{$i->id_participants}}">
            		<input type="hidden" name="id_participants" value="{{$i->id_activities}}">
                  	<th class="text-center">{{$i->participants}}</th>
                  	<th class="text-center">{{date('d-m-Y/h:i A', strtotime($i->created_at))}}</th>
                  	<th class="text-center">{{$i->status_request}}</th>
                  	<th class="text-center">{{$i->status}}</th>
                  	<th class="text-center"><a href="statusterima/{{$i->id_participants}}/{{$i->id_activities}}/{{'diterima'}}/{{$i->status_request}}">Terima</a>&nbsp&nbsp<a href="statustolak/{{$i->id_participants}}/{{$i->id_activities}}/{{'ditolak'}}/{{$i->status_request}}">Tolak</a>&nbsp&nbsp<a href="deleteinkeg/{{$i->id_participants}}/{{$i->id_activities}}/{{$i->status}}">Hapus</a></th>
                </tr>
                @endforeach
            </tbody>
          </table>
  </div>
</div>
</div>

@endsection