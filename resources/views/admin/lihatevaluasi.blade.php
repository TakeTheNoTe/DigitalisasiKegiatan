@extends('layouts.admin.evaluasi')

@section('content')
<div class="container">

                            <h3 class="text-dark mb-4" style="margin-top: 45px;">Hasil Evaluasi</h3>
                            <?php 
                                                    if (e($ev1)>e($ev2) && e($ev1)>e($ev3) && e($ev1)>e($ev4) && e($ev1)>e($ev5))
                                                    {
                                                        echo "<h4>Sangat Buruk</h4>";
                                                    }
                                                    elseif (e($ev2)>e($ev1) && e($ev2)>e($ev3) && e($ev2)>e($ev4) && e($ev2)>e($ev5))
                                                    {
                                                        echo "<h4>Buruk</h4>";
                                                    }
                                                    elseif (e($ev3)>e($ev1) && e($ev3)>e($ev2) && e($ev3)>e($ev4) && e($ev3)>e($ev5))
                                                    {
                                                        echo "<h4>Cukup Baik</h4>";
                                                    }
                                                    elseif (e($ev4)>e($ev1) && e($ev4)>e($ev2) && e($ev4)>e($ev3) && e($ev4)>e($ev5))
                                                    {
                                                        echo "<h4>Baik</h4>";
                                                    }
                                                    elseif (e($ev5)>e($ev1) && e($ev5)>e($ev2) && e($ev5)>e($ev3) && e($ev5)>e($ev4))
                                                    {
                                                        echo "<h4>Sangat Baik</h4>";
                                                    }
                                                    else{
                                                        echo "<h4>Cukup Baik</h4>";
                            }?>
                            <div class="card shadow">
                                <div class="card-body">
                                    <a href="{{ route('adminevaluasi.index') }}" style="margin-left: 1000px">{{ __('Kembali') }}</a></p>
                                    <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                        <!-- daftar peserta -->
                                        <table class="table dataTable my-0">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Peserta</th>
                                                    <th class="text-center">Opsi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($answ as $i)
                                                <tr>
                                                    <td class="text-center">{{$i->participants}}</td>
                                                    <td class="text-center"><a href="lihathaev/{{$i->id_participants}}/{{$id}}">lihat</a></td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
@endsection