<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    use HasFactory;
    protected $table = 'ruangan';
    protected $fillable = ['fakultas_id','nama','lantai'];

    public function fakultas(){
        return $this->belongsTo(Fakultas::class);
    }
}
