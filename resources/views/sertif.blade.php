@extends('layouts.user.sertifikat')
@section('content')
<div class="container">
<h3 class="text-dark mb-4">Sertifikat</h3>
    <div class="row mb-3">
        <div class="col-lg-12">
 <div class="card w-74">
   <div class="card">
     <div class="card-body">
        <table class="table my-0">
           	<thead>
                <tr>
                  <th class="text-center">Link Unduh</th>
                </tr>
           	</thead>
            <tbody>
              	@foreach($ceksertif as $i)
              <tr>
              	<?php if ($i->status == "diterima" && $i->status_request == "keluar"){
                	?><td class="text-center"><a href="unduhsertif/{{'mengunduh sertifikat kegiatan'}}/{{$i->activities}}">Unduh sertifikat</a></td><?php
              	}elseif($i->status == "ditolak" && $i->status_request == "keluar"){
              		?><td class="text-center">Anda tidak dapat mengunduh sertifikat {{$name}} dikarenakan presensi pada kegiatan {{$name}} ditolak.</td><?php
              	}elseif($i->status == "tunggu" && $i->status_request == "keluar"){
              		?><td class="text-center">Mohon tunggu admin untuk memperbarui status presensi anda.</td><?php
              	}elseif($i->status == '' && $i->status_request == ''){
              		?><td class="text-center">Silahkan mengisi presensi atau Admin Belum Menyetujui Absensi Anda, Mohon Tunggu.</td><?php
              	}?>
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