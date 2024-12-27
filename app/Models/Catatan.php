<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Catatan extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'perjalanan';
    protected $fillable = ['Tanggal', 'Waktu', 'Lokasi', 'SuhuTubuh'];
    protected $primaryKey = 'PerjalananID';
}
