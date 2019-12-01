<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    
    protected $table = 'tbcalon';

    public function jurusan(){
        return $this->belongsTo('App\Jurusan');
    }

    public function referal(){
        return $this->belongsTo('App\Referal');
    }
}
