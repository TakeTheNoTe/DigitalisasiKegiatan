<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Charts;

class AdminLaporanController extends Controller
{

public function index()
    {
        $lapor = DB::table('activities')
        ->select('*')
        ->distinct()
        ->get();
        return view('admin/laporan',compact('lapor'));
    }

public function laporanjk()
    {
    $users = DB::table('users')
    ->select('gender')
    ->where('gender',"Pria")
    ->count();

    $usersw = DB::table('users')
    ->select('gender')
    ->where('gender',"Wanita")
    ->count();

    $chart = Charts::database($users, 'bar', 'highcharts')
    ->title('Jenis Kelamin')
    ->elementLabel('Jumlah Jenis Kelamin')
    ->labels(['Pria','Wanita'])
    ->values([$users,$usersw])
    ->dimensions(1000,500)
    ->responsive(false);
    return view('admin/laporanjk',compact('chart'));
    }

public function laporanevkeg()
    {
    $ansr1 = DB::table('answers')
    ->select('answer')
    ->where('answer', 1)
    ->count();

    $ansr2 = DB::table('answers')
    ->select('answer')
    ->where('answer', 2)
    ->count();

    $ansr3 = DB::table('answers')
    ->select('answer')
    ->where('answer', 3)
    ->count();

    $ansr4 = DB::table('answers')
    ->select('answer')
    ->where('answer', 4)
    ->count();

    $ansr5 = DB::table('answers')
    ->select('answer')
    ->where('answer', 5)
    ->count();

    $chart = Charts::database($ansr1, 'bar', 'highcharts')
    ->title('Hasil Evaluasi Semua Kegiatan')
    ->elementLabel('Jumlah Jawaban')
    ->labels(['Sangat Tidak Setuju', 'Tidak Setuju', 'Biasa Saja', 'Setuju', 'Sangat Setuju'])
    ->values([$ansr1,$ansr2,$ansr3,$ansr4,$ansr5])
    ->dimensions(1000,500)
    ->responsive(false);
    return view('admin/laporanevkeg',compact('chart')); 
    }

public function laporanpendik()
    {
        $user1 = DB::table('users')
        ->select('degree')
        ->where('degree','Sarjana 1')
        ->count();

        $user2 = DB::table('users')
        ->select('degree')
        ->where('degree','Sarjana 2')
        ->count();

        $user3 = DB::table('users')
        ->select('degree')
        ->where('degree','Sarjana 3')
        ->count();

        $chart = Charts::database($user1, 'bar', 'highcharts')
        ->title('Tingkat Pendidikan Pada Peserta')
        ->elementLabel('Jumlah Tingkat Pendidikan Peserta')
        ->labels(['Sarjana 1', 'Sarjana 2', 'Sarjana 3'])
        ->values([$user1, $user2, $user3])
        ->dimensions(1000,500)
        ->responsive(false);
        return view('admin/laporanpendik',compact('chart')); 
    }

public function laporanfakul()
    {

        $fakul1 = DB::table('users')
        ->select('faculty')
        ->where('faculty','Fakultas Bahasa dan Seni')
        ->count();

        $fakul2 = DB::table('users')
        ->select('faculty')
        ->where('faculty','Fakultas Biologi')
        ->count();

        $fakul3 = DB::table('users')
        ->select('faculty')
        ->where('faculty','Fakultas Ekonomika dan Bisnis')
        ->count();

        $fakul4 = DB::table('users')
        ->select('faculty')
        ->where('faculty','Fakultas Hukum')
        ->count();

        $fakul5 = DB::table('users')
        ->select('faculty')
        ->where('faculty','Fakultas Ilmu Sosial dan Komunikasi')
        ->count();

        $fakul6 = DB::table('users')
        ->select('faculty')
        ->where('faculty','Fakultas Keguruan dan Ilmu Pendidikan')
        ->count();

        $fakul7 = DB::table('users')
        ->select('faculty')
        ->where('faculty','Fakultas Kedokteran dan Ilmu Kesehatan')
        ->count();

        $fakul8 = DB::table('users')
        ->select('faculty')
        ->where('faculty','Fakultas Ilmu Pertanian dan Bisnis')
        ->count();

        $fakul9 = DB::table('users')
        ->select('faculty')
        ->where('faculty','Fakultas Psikologi')
        ->count();

        $fakul10 = DB::table('users')
        ->select('faculty')
        ->where('faculty','Fakultas Sains dan Matematika')
        ->count();

        $fakul11 = DB::table('users')
        ->select('faculty')
        ->where('faculty','Fakultas Teknik Elektro dan Komputer')
        ->count();

        $fakul12 = DB::table('users')
        ->select('faculty')
        ->where('faculty','Fakultas Teknologi Informasi')
        ->count();

        $fakul13 = DB::table('users')
        ->select('faculty')
        ->where('faculty','Fakultas Teologi')
        ->count();

        $chart = Charts::database($fakul1, 'bar', 'highcharts')
        ->title('Tingkat Fakultas Peserta')
        ->elementLabel('Jumlah Peserta')
        ->labels(['Fakultas Bahasa dan Seni', 'Fakultas Biologi', 'Fakultas Ekonomika dan Bisnis', 'Fakultas Hukum', 'Fakultas Ilmu Sosial dan Komunikasi', 'Fakultas Keguruan dan Ilmu Pendidikan', 'Fakultas Kedokteran dan Ilmu Kesehatan', 'Fakultas Ilmu Pertanian dan Bisnis', 'Fakultas Psikologi', 'Fakultas Sains dan Matematika', 'Fakultas Teknik Elektro dan Komputer', 'Fakultas Teknologi Informasi', 'Fakultas Teologi'])
        ->values([$fakul1, $fakul2, $fakul3, $fakul4, $fakul5, $fakul6, $fakul7, $fakul8, $fakul9, $fakul10, $fakul11, $fakul12, $fakul13])
        ->dimensions(1000,500)
        ->responsive(false);
        return view('admin/laporanfakul',compact('chart'));
    }
}
