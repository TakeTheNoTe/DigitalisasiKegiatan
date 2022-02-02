@extends('layouts.admin.evaluasi')

@section('content')

<div class="container">
    <div class="row mb-3">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow mb-3">
                        <div class="card-header py-3">
                        <p class="text-primary m-0 font-weight-bold">Ganti Pertanyaan<a href="{{ route('adminevaluasi.index') }}" style="margin-left: 850px">{{ __('Kembali') }}</a></p>
                        </div>
                    <div class="card-body">
                    <form method="POST" action="{{ url('updatepertanyaan/'.$id) }}">
                        {{csrf_field()}}
                        {{method_field('PUT')}}
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><label><strong>Pertanyaan</strong></label>
                             <input class="form-control" name="question" type="text" value="{{$question}}">
                            </div>
                         </div>
                    </div>
                    <div class="form-group"><button class="btn btn-primary btn-sm" type="submit">{{ __('Ganti') }}</button></div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection