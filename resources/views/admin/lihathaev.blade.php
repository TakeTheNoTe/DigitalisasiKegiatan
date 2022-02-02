@extends('layouts.admin.evaluasi')

@section('content')
<div class="container">

                            <h3 class="text-dark mb-4" style="margin-top: 45px;">Hasil Evaluasi</h3>
                            <div class="card shadow">
                                <div class="card-body">
                                    <a href="{{ route('adminevaluasi.index') }}" style="margin-left: 1000px">{{ __('Kembali') }}</a></p>
                                    <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                        <!-- daftar peserta -->
                                        <table class="table dataTable my-0">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Pertanyaan</th>
                                                    <th class="text-center">Jawaban</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($answr as $i)
                                                <tr>
                                                    <td class="text-center">{{$i->question}}</td>
                                                    <td class="text-center"><?php if (e($i->answer) == '1')
                                                    {
                                                        echo "Sangat Tidak Setuju";
                                                    }elseif (e($i->answer) == '2') {
                                                        echo "Tidak Setuju";
                                                    }elseif (e($i->answer) == '3') {
                                                        echo "Biasa saja";
                                                    }elseif (e($i->answer) == '4') {
                                                        echo "Setuju";
                                                    }elseif (e($i->answer) == '5') {
                                                        echo "Sangat Setuju";
                                                    }else{
                                                        echo "Jawaban Tidak Benar";
                                                    }?></td></td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
@endsection