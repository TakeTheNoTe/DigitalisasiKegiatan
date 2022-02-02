@extends('layouts.admin.kegiatan')

@section('content')

<div class="container">
    <div class="row mb-3">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow mb-3">
                        <div class="card-header py-3">
                        <p class="text-primary m-0 font-weight-bold">Tambah Kegiatan<a href="{{ route('adminkegiatan.index') }}" style="margin-left: 875px">{{ __('Kembali') }}</a></p>
                        </div>
                    <div class="card-body">
                    <form method="POST" action="{{ url('insertk') }}">
                        @csrf
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><label><strong>Nama Kegiatan</strong></label>
                             <input class="form-control" name="name" type="text">
                            </div>
                         </div>
                    </div>
                     <div class="form-row">
                        <div class="col">
                            <div class="form-group"><label><strong>Tanggal Kegiatan</strong></label>
                             <input class="form-control" name="date" type="date">
                            </div>
                         </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><label><strong>Jumlah Peserta</strong></label>
                             <input class="form-control" name="participants" type="text">
                            </div>
                         </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><label><strong>Tanggal Buka Pendaftaraan</strong></label>
                             <input class="form-control" name="open_date" type="date">
                            </div>
                         </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><label><strong>Tanggal Tutup Pendaftaraan</strong></label>
                             <input class="form-control" name="close_date" type="date">
                            </div>
                         </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><label><strong>Jam Mulai Kegiatan</strong></label>
                             <input class="form-control" name="start_time" type="time">
                            </div>
                         </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><label><strong>Jam Selesai Kegiatan</strong></label>
                             <input class="form-control" name="end_time" type="time">
                            </div>
                         </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><label><strong>Link Kegiatan</strong></label>
                             <input class="form-control" name="link" type="text">
                            </div>
                         </div>
                    </div>
                    <div class="form-group"><button class="btn btn-primary btn-sm" type="submit">{{ __('Tambah') }}</button></div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection