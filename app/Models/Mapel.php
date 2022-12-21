<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pengumpulan;
use Illuminate\Support\Carbon;

class Mapel extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $dates = ['created_at'];

    public function tugas(){
        return $this->hasMany(tugas::class);
    }

    public function pengumpulan(){
        return $this->hasMany(pengumpulan::class);
    }

    public function getCreatedAtAttribute(){
        return Carbon::parse($this->attributes['created_at'])
            ->translatedFormat('l, d F Y');
    }

}
