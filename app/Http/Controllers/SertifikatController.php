<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Activities;
use App\Detailactivities;
use App\Attendances;
use App\Question;
use App\Answer;
use App\Log;
use App;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;

class SertifikatController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $sertifikat = DB::table('detailactivities')
        ->select('*')
        ->where('id_participants',$user->id)
        ->paginate(5);

        return view('sertifikat', compact('user','sertifikat'));
    }

public function sertif($id,$name)
    {
        $user=Auth::user();

        $img = Image::make('https://3.bp.blogspot.com/-muXeKWTaC2I/UHaOwxa52cI/AAAAAAAABx8/OyqW6LhLUgU/s1600/Sertifikat-LKMM-TM-2012-OK.jpg');

        $img->text($user->name,500,350, function($font){
            $font->file(base_path('public/fonts/Roboto-Bold.ttf'));
            $font->size(32);
            $font->color('#990000');
            $font->align('center');
            $font->valign('top');
        });
        $img->text('Peserta '.$name,500,400, function($font){
            $font->file(base_path('public/fonts/Roboto-Bold.ttf'));
            $font->size(32);
            $font->color('#990000');
            $font->align('center');
            $font->valign('top');
        });
        $img->save('C:\xampp\htdocs\kerjapraktek\public\sertifikat'.$id.'.jpg');

        $ceksertif = DB::table('attendances')
        ->select('*')
        ->where('id_participants',$user->id)
        ->where('id_activities',$id)
        ->get();

        return view('sertif',compact('id','user','ceksertif','name'));
    }

    public function unduhsertif($id,$desc,$name)
    {
        $user=Auth::user();

        $sertifikat = App::make('dompdf.wrapper');
        $data = "<img src='sertifikat".$id.".jpg>";
        $sertifikat->loadHTML($data)->setPaper('A4','landscape')->setWarnings(false);

        $log = new Log;
        $log->id_participants = $user->id;
        $log->participants = $user->name;
        $log->activities = $name;
        $log->description = $desc;
        $log->save();

        return $sertifikat->stream();
    }
}
