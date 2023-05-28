<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $table = 'class';
    protected $fillable = ['name', 'mahasiswa_id'];

    public function mahasiswas()
    {
        return $this->hasMany(Mahasiswa::class, 'class_id', 'id');
    }
}
