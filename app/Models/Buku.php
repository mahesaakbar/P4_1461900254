<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = "buku";

    protected $fillable = ['id','judul','tahun_terbit'];
}