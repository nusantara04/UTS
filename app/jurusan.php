<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jurusan extends Model
{
    protected $table = 'tbjurusan';

    public function siswa(){
        return $this->hasMany('App\Siswa');
    }
}
