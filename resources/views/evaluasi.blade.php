@extends('layouts.user.evaluasi')
@section('content')
<div class="container">
  <h3 class="text-dark mb-4" style="margin-top: 45px;">Evaluasi</h3>
<div class="card w-74">
  <div class="card-body">
    <h5 class="card-title text-center">Evaluasi Kegiatan</h5><span>{{$evaluation->links()}}</span>
    <table class="table dataTable my-0">
            <thead>
                <tr>
                  <th class="text-center">Nama Kegiatan</th>
                  <th class="text-center">Tanggal</th>
                  <th class="text-center">Jam Mulai</th>
                  <th class="text-center">Jam Selesai</th>
                  <th class="text-center">Opsi</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($evaluation as $i)
            	<tr>
                  <th class="text-center">{{$i->activities}}</th>
                  <th class="text-center">{{date('d-m-Y', strtotime($i->date))}}</th>
                  <th class="text-center">{{$i->start_time}}</th>
                  <th class="text-center">{{$i->end_time}}</th>
                  <th class="text-center"><a href="evaluasib/{{$i->id_activities}}/{{$i->activities}}">Evaluasi</a></th>
                </tr>
                @endforeach
            </tbody>
          </table>
  </div>
</div>
</div>
@endsection