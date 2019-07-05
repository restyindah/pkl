<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    protected $table="sekolahs";
    protected $fillable=['namasiswa','namaguru','kelas','pelajaran','nis'];
}
