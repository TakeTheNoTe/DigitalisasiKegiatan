@extends('layouts.user.sertifikat')
@section('content')
<div class="container">
<h3 class="text-dark mb-4">Sertifikat</h3>
    <div class="row mb-3">
        <div class="col-lg-12">
 <div class="card w-74">
   <div class="card">
     <div class="card-body">
       <h5 class="card-title text-center">Kegiatan</h5><span>{{$sertifikat->links()}}</span>
        <table class="table my-0">
           	<thead>
                <tr>
                  <th class="text-center">Nama</th>
                  <th class="text-center">Tanggal</th>
                  <th class="text-center">Opsi</th>
                </tr>
           	</thead>
            <tbody>
               @foreach($sertifikat as $i)
              <tr>
                <td class="text-center">{{$i->activities}}</td>
                <td class="text-center">{{date('d-m-Y', strtotime($i->date))}}</td>
                <th class="text-center"><a href="sertif/{{$i->id_activities}}/{{$i->activities}}">Ambil</a></th>
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