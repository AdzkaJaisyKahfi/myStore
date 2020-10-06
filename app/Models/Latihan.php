<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Latihan extends Model
{
    protected $fillable = [
        'nama_murid', 'status_murid', 'nilai_tugas', 'nilai_pts','nilai_uas'
    ];
    use HasFactory;
}
