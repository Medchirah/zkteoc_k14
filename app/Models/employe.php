<?php

namespace App\Models;

use App\Models\shifttime;
use App\Models\departement;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class employe extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $fillable=['nom','nomDept'.'photo','gender','empriente','date_travail'];
    public function departement()
    {
        return $this->belongsTo(departement::class);
    }
    public function shifttime()
    {
   
       return $this->belongsToMany(shifttime::class);
    }
}
