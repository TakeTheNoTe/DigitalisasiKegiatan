@extends('layouts.admin.laporan')

@section('content')

<div class="container">
    <h3 class="text-dark mb-4" style="margin-top: 45px;">Laporan</h3>
    <div class="card shadow">
                                <div class="card-body">
                                    <div class="panel panel-default">
                                            <div class="panel-heading">Chart Tingkat Pendidikan Pada Peserta <a href="{{ route('adminlaporan.index') }}" style="margin-left: 720px">{{ __('Kembali') }}</a></div>
                                                <div class="panel-body">
                                                    {!! $chart->html() !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
{!! Charts::scripts() !!}
{!! $chart->script() !!}
@endsection