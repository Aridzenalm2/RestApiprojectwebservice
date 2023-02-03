<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Rekamedis extends Model
{

    protected $connection = 'mongodb';
    protected $collection = 'datapasien';
    protected $fillable = ['nama', 'tanggal_lahir', 'alamat', 'nomor_telepon'];
    
}
