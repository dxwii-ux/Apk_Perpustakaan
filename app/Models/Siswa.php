<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $guarded =[];
    protected $primaryKey ='nis';
    public $incrementing = false;
}
