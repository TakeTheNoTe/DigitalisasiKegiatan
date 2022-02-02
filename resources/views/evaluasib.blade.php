@extends('layouts.user.evaluasi')
@section('content')
<div class="container">
<div class="card w-74">
  <div class="card-body">
    <h5 class="card-title text-center">Evaluasi Kegiatan {{$name}}</h5>
    <form method="POST" action="{{ url('/inserte/'.$id.'/'.$user->id.'/'.$user->name.'/'.$name.'/'.' melakukan evaluasi') }}">
      @csrf
      <input type="hidden" name="quest1" value="{{$quest[0]->question}}">1. {{$quest[0]->question}}<br>
        <select class="form-control"  name="answer1">
          <option selected>Pilih Jawaban</option>
          <option value='1'>Sangat Tidak Setuju</option>
          <option value='2'>Tidak Setuju</option>
          <option value='3'>Biasa Saja</option>
          <option value='4'>Setuju</option>
          <option value='5'>Sangat Setuju</option>
        </select><br>
      <input type="hidden" name="quest2" value="{{$quest[1]->question}}">2. {{$quest[1]->question}}<br>
        <select class="form-control"  name="answer2">
          <option selected>Pilih Jawaban</option>
          <option value='1'>Sangat Tidak Setuju</option>
          <option value='2'>Tidak Setuju</option>
          <option value='3'>Biasa Saja</option>
          <option value='4'>Setuju</option>
          <option value='5'>Sangat Setuju</option>
        </select><br>
      <input type="hidden" name="quest3" value="{{$quest[2]->question}}">3. {{$quest[2]->question}}<br>
        <select class="form-control"  name="answer3">
          <option selected>Pilih Jawaban</option>
          <option value='1'>Sangat Tidak Setuju</option>
          <option value='2'>Tidak Setuju</option>
          <option value='3'>Biasa Saja</option>
          <option value='4'>Setuju</option>
          <option value='5'>Sangat Setuju</option>
        </select><br>
      <input type="hidden" name="quest4" value="{{$quest[3]->question}}">4. {{$quest[3]->question}}<br>
       <select class="form-control"  name="answer4">
          <option selected>Pilih Jawaban</option>
          <option value='1'>Sangat Tidak Setuju</option>
          <option value='2'>Tidak Setuju</option>
          <option value='3'>Biasa Saja</option>
          <option value='4'>Setuju</option>
          <option value='5'>Sangat Setuju</option>
        </select><br>
      <input type="hidden" name="quest5" value="{{$quest[4]->question}}">5. {{$quest[4]->question}}<br>
       <select class="form-control"  name="answer5">
          <option selected>Pilih Jawaban</option>
          <option value='1'>Sangat Tidak Setuju</option>
          <option value='2'>Tidak Setuju</option>
          <option value='3'>Biasa Saja</option>
          <option value='4'>Setuju</option>
          <option value='5'>Sangat Setuju</option>
        </select><br>
      <input type="hidden" name="quest6" value="{{$quest[5]->question}}">6. {{$quest[5]->question}}<br>
        <select class="form-control"  name="answer6">
          <option selected>Pilih Jawaban</option>
          <option value='1'>Sangat Tidak Setuju</option>
          <option value='2'>Tidak Setuju</option>
          <option value='3'>Biasa Saja</option>
          <option value='4'>Setuju</option>
          <option value='5'>Sangat Setuju</option>
        </select><br>
      <input type="hidden" name="quest7" value="{{$quest[6]->question}}">7. {{$quest[6]->question}}<br>
        <select class="form-control"  name="answer7">
          <option selected>Pilih Jawaban</option>
          <option value='1'>Sangat Tidak Setuju</option>
          <option value='2'>Tidak Setuju</option>
          <option value='3'>Biasa Saja</option>
          <option value='4'>Setuju</option>
          <option value='5'>Sangat Setuju</option>
        </select><br>
      <input type="hidden" name="quest8" value="{{$quest[7]->question}}">8. {{$quest[7]->question}}<br>
       <select class="form-control"  name="answer8">
          <option selected>Pilih Jawaban</option>
          <option value='1'>Sangat Tidak Setuju</option>
          <option value='2'>Tidak Setuju</option>
          <option value='3'>Biasa Saja</option>
          <option value='4'>Setuju</option>
          <option value='5'>Sangat Setuju</option>
        </select><br>
      <input type="hidden" name="quest9" value="{{$quest[8]->question}}">9. {{$quest[8]->question}}<br>
       <select class="form-control"  name="answer9">
          <option selected>Pilih Jawaban</option>
          <option value='1'>Sangat Tidak Setuju</option>
          <option value='2'>Tidak Setuju</option>
          <option value='3'>Biasa Saja</option>
          <option value='4'>Setuju</option>
          <option value='5'>Sangat Setuju</option>
        </select><br>
      <input type="hidden" name="quest10" value="{{$quest[9]->question}}">10. {{$quest[9]->question}}<br>
        <select class="form-control"  name="answer10">
          <option selected>Pilih Jawaban</option>
          <option value='1'>Sangat Tidak Setuju</option>
          <option value='2'>Tidak Setuju</option>
          <option value='3'>Biasa Saja</option>
          <option value='4'>Setuju</option>
          <option value='5'>Sangat Setuju</option>
        </select><br>
      <button class="btn btn-primary btn-sm" type="submit">{{ __('Simpan') }}</button>
    </form>
  </div>
</div>
</div>
@endsection