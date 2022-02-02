@extends('layouts.admin.kegiatan')

@section('content')

<div class="container">
    <div class="row mb-3">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow mb-3">
                        <div class="card-header py-3">
                        <p class="text-primary m-0 font-weight-bold">Ganta Data Kegiatan<a href="{{ route('adminkegiatan.index') }}" style="margin-left: 850px">{{ __('Kembali') }}</a></p>
                        </div>
                    <div class="card-body">
                    <form method="POST" action="{{ url('updatek/'.$activities->id) }}">
                        {{csrf_field()}}
                        {{method_field('PUT')}}
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><label><strong>Nama</strong></label>
                             <input class="form-control" name="name" type="text" value="{{$activities->name}}">
                            </div>
                         </div>
                    </div>
                     <div class="form-row">
                        <div class="col">
                            <div class="form-group"><label><strong>Tanggal</strong></label>
                             <input class="form-control" name="date" type="date" value="{{$activities->date}}">
                            </div>
                         </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><label><strong>Kuota</strong></label>
                             <input class="form-control" name="participants" type="text" value="{{$activities->participants}}">
                            </div>
                         </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><label><strong>Tanggal buka</strong></label>
                             <input class="form-control" name="open_date" type="date" value="{{$activities->open_date}}">
                            </div>
                         </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><label><strong>Tanggal tutup</strong></label>
                             <input class="form-control" name="close_date" type="date" value="{{$activities->close_date}}">
                            </div>
                         </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><label><strong>Jam Mulai</strong></label>
                             <input class="form-control" name="start_time" type="time" value="{{$activities->start_time}}">
                            </div>
                         </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><label><strong>Jam Selesai</strong></label>
                             <input class="form-control" name="end_time" type="time" value="{{$activities->end_time}}">
                            </div>
                         </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><label><strong>Link</strong></label>
                             <input class="form-control" name="link" type="text" value="{{$activities->link}}">
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