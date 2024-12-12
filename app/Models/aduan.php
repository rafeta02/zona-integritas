<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aduan extends Model
{
    use HasFactory;
    protected $fillable=[ 'hal','isi_aduan','name','tanggal'];
}
