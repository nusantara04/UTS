<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class referal extends Model
{
    protected $table = 'tbreferal';

    public function siswa(){
        return $this->hasMany('App\Siswa');
    }
}
