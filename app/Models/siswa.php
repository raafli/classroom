<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\tugas;
use Illuminate\Support\Carbon;

class siswa extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $dates = ['created_at'];

    public function tugas(){
        return $this->hasMany(tugas::class);
}
    public function dtugas(){
        return $this->hasMany(dtugas::class);
}
    public function kelas(){
    return $this->belongsTo(kelas::class, 'kelas_id', 'id');
}

    public function getCreatedAtAttribute(){
        return Carbon::parse($this->attributes['created_at'])
            ->translatedFormat('l, d F Y');
}
}
