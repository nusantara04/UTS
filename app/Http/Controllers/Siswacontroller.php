<?php

namespace App\Http\Controllers;

use App\Siswa;
use App\Jurusan;
use App\Referal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    
    function cara_orm(){
        $siswa = Siswa::all();
            $data=array(
                'judul' => 'Menampilkan Data Dengan ORM',
                'datasiswa' =>$siswa
            );
            return view('Query/cara_orm',$data);
    }
    function cara_rq(){
        $siswa  = DB::select('select * from tbcalon');
            $data=array(
                'judul' => 'Menampilkan Data Dengan Raw Query',
                'datasiswa' =>$siswa
            );
            return view('cara_rq',$data);
    
    }
    function cara_qb(){
        $siswa = DB::table('tbcalon')->get();
        $data=array(
            'judul' => 'Menampilkan Data Dengan QB',
            'datasiswa' =>$siswa
        );
        return view('cara_qb',$data);
    }

////////////////////////////////////////////////////////////////////////////////////////
    function awalanA(){
        $siswa = DB::table('tbcalon')->where('nama_calon','like','A%')->get();
        $data=array(
            'judul' => 'Huruf A',
            'datasiswa' =>$siswa
        );
        return view('awalanA',$data);
    }
    function soal2_orm(){
        $siswa = Siswa::where('nama_calon','like','A%')->get();
        $data=array(
            'judul' => 'Huruf A Orm',
            'datasiswa' =>$siswa
        );
        return view('awalanA',$data);
    }
////////////////////////////////////////////////////////////////////////////////////////

    function akhiranS(){
        $siswa = DB::table('tbcalon')->where('nama_calon','like','%S')->get();
        $data=array(
            'judul' => 'Akhir Huruf S',
            'datasiswa' =>$siswa
        );
        return view('akhiranS',$data);
    }
    function soal4_orm(){
        $siswa = Siswa::where('nama_calon','like','%S')->get();
        $data=array(
            'judul' => 'Akhir Huruf S ORM',
            'datasiswa' =>$siswa
        );
        return view('akhiranS',$data);
    }
////////////////////////////////////////////////////////////////////////////////////////

    function soal5(){
        $siswa = DB::table('tbcalon')->join('tbreferal','tbcalon.id_referal','tbreferal.id_referal')->get();
        $data=array(
            'judul' => 'Siswa dan referal',
            'datasiswa' =>$siswa
        );
        return view('soal5',$data);
    }

    function soal5_orm(){
        $siswa = Siswa::join('tbreferal','tbcalon.id_referal','tbreferal.id_referal')->get();
        $data=array(
            'judul' => 'Siswa dan referal ORM',
            'datasis' =>$siswa
        );
        return view('soal5',$data);
    }


////////////////////////////////////////////////////////////////////////////////////////
    function soal6(){
        $siswa = DB::table('tbcalon')->join('tbjurusan','tbcalon.id_jurusan','tbjurusan.id_jurusan')->get();
        $data=array(
            'judul' => 'Siswa dan jurusan',
            'datasiswa' =>$siswa
        );
        return view('soal6',$data);
    }

    function soal6_orm(){
        $siswa = Siswa::join('tbjurusan','tbcalon.id_jurusan','tbjurusan.id_jurusan')->get();
        $data=array(
            'judul' => 'Siswa dan jurusan ORM',
            'datasiswa' =>$siswa
        );
        return view('soal6',$data);
    }


////////////////////////////////////////////////////////////////////////////////////////
    function soal7(){
        $siswa = DB::table('tbcalon')->join('tbjurusan','tbcalon.id_jurusan','tbjurusan.id_jurusan')->join(
            'tbreferal','tbcalon.id_referal','tbreferal.id_referal')->get();
        $data=array(
            'judul' => 'Siswa ref jurusan',
            'datasiswa' =>$siswa
        );
        return view('soal7',$data);
    }

    function soal7_orm(){
        $siswa = Siswa::join('tbjurusan','tbcalon.id_jurusan','tbjurusan.id_jurusan')->join(
            'tbreferal','tbcalon.id_referal','tbreferal.id_referal')->get();
        $data=array(
            'judul' => 'Siswa ref jurusan ORM',
            'datasiswa' =>$siswa
        );
        return view('soal7',$data);
    }



////////////////////////////////////////////////////////////////////////////////////////
    function soal8(){
        $siswa = DB::table('tbcalon')->join('tbreferal','tbcalon.id_referal','tbreferal.id_referal')
        ->join('tbjurusan','tbcalon.id_jurusan','tbjurusan.id_jurusan')->where('tbcalon.id_jurusan','2')->get();
        $data=array(
            'judul' => 'Siswa dan ref tekom',
            'datasiswa' =>$siswa
        );
        return view('soal8',$data);
    }

    function soal8_orm(){
        $siswa = Siswa::join('tbreferal','tbcalon.id_referal','tbreferal.id_referal')
        ->join('tbjurusan','tbcalon.id_jurusan','tbjurusan.id_jurusan')->where('tbcalon.id_jurusan','2')->get();
        $data=array(
            'judul' => 'Siswa dan ref tekom ORM',
            'datasiswa' =>$siswa
        );
        return view('soal8',$data);
    }


////////////////////////////////////////////////////////////////////////////////////////
    function soal9(){
        $siswa = DB::table('tbcalon')->join('tbreferal','tbcalon.id_referal','tbreferal.id_referal')->where
        ('tbreferal.nama_referal','like','A%')->get();
        $data=array(
            'judul' => 'Siswa dan ref A',
            'datasiswa' =>$siswa
        );
        return view('soal9',$data);
    }
    function soal9_orm(){
        $siswa = Siswa::join('tbreferal','tbcalon.id_referal','tbreferal.id_referal')->where(
            'tbreferal.nama_referal','like','A%')->get();
        $data=array(
            'judul' => 'Siswa dan ref A ORM',
            'datasiswa' =>$siswa
        );
        return view('soal9',$data);
    }


////////////////////////////////////////////////////////////////////////////////////////
    function soal10(){
        $siswa = DB::table('tbcalon')->join('tbjurusan','tbcalon.id_jurusan','tbjurusan.id_jurusan')->join(
            'tbreferal','tbcalon.id_referal','tbreferal.id_referal')->where('tbcalon.tempat_lahir','Sukabumi')->where(
            'tbcalon.tanggal_lahir','like','%2000%')->get();
        $data=array(
            'judul' => 'Siswa smi 2000',
            'datasiswa' =>$siswa
        );
        return view('soal10',$data);
    }
    function soal10_orm(){
        $siswa = Siswa::join('tbjurusan','tbcalon.id_jurusan','tbjurusan.id_jurusan')->join(
            'tbreferal','tbcalon.id_referal','tbreferal.id_referal')->where(
            'tbcalon.tempat_lahir','Sukabumi')->where('tbcalon.tanggal_lahir',
            'like','%2000%')->get();
        $data=array(
            'judul' => 'Siswa smi 2000 ORM',
            'datasiswa' =>$siswa
        );
        return view('soal10',$data);
    }

}
