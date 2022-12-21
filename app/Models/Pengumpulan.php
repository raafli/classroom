<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Pengumpulan extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $dates = ['created_at'];

    public function mapel(){
        return $this->belongsTo(Mapel::class, 'mapels_id', 'id');
    }
    public function nama(){
        return $this->belongsTo(siswa::class, 'siswas_id', 'id');
    }

    public function getCreatedAtAttribute(){
        return Carbon::parse($this->attributes['created_at'])
            ->translatedFormat('l, d F Y');
    }

}
