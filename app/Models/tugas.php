<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mapel;
use Illuminate\Support\Carbon;

class tugas extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $dates = ['created_at'];

    public function mapel(){
        return $this->belongsTo(Mapel::class, 'mapels_id', 'id');
    }

    public function getCreatedAtAttribute(){
        return Carbon::parse($this->attributes['created_at'])
            ->translatedFormat('l, d F Y');
    }
}
