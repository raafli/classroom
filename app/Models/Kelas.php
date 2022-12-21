<?php

namespace App\Models;

use App\Models\siswa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Carbon;

class Kelas extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $dates = ['created_at'];

    public function siswa(){
        return $this->hasMany(siswa::class);
    }

    public function getCreatedAtAttribute(){
        return Carbon::parse($this->attributes['created_at'])
            ->translatedFormat('l, d F Y'); 
    }
}
