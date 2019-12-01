<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

use Validator;

class JurusanController extends Controller
{
    function index(){
        $jurusan = DB::table('tbjurusan')->get();
        $data=array(
            'judul' =>'Data Jurusan',
            'datasiswa'=>$jurusan
        );
        return view('jurusan/index',$data);
    }

    function form(){
        return view('jurusan/form');
    }
    
    function save(Request $rq){
        $qry= DB::table('tbjurusan')->insert([
            'nama_jurusan'=>$rq->namajurusan,
            'kodejurusan'=>$rq->kodejurusan,
            'nama_kajur'=>$rq->nama_kajur,
        ]);
        $pesan="Data berhasil disimpan";

    if ($qry){
        return redirect()->route('jurusan');
    }else{
        echo "gagal";
    }
    }

    function formedit($id){
        $result = array();
        $mm = DB::table('tbjurusan')
            ->where('id_jurusan',$id)
            ->get();
        $result['master'] = $mm;
        $data=array(
            'judul'=>'Form edit data'
        );
        return view('jurusan/formedit',$data)->with('result', $result);
    }

    function update(Request $rq){
        $qry= DB::table('tbjurusan')->where('id_jurusan',$rq->id)
        ->update([
            'nama_jurusan' => $rq->namajurusan,
            'kodejurusan' => $rq->kodejurusan,
            'nama_kajur' => $rq->nama_kajur
        ]);
        $pesan="Data berhasil di Edit";

    if ($qry) {
        return redirect()->route('jurusan');
    }else{
        echo "Gagal";
    }
   }
   function delete($id){
       $qry=DB::table('tbjurusan')->where('id_jurusan',$id)->delete();
       $pesan="Data berhasil dihapus";
       if ($qry){
           return redirect()->route('jurusan');
       }else{
           echo "Gagal";
       }
   }
}
