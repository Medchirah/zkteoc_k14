<?php

namespace App\Models;

use App\Models\employe;
use App\Models\shifttime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class tabletime extends Model
{
    use HasFactory;
    protected $fillable=['employe_id','shifttime_id','date_debut','date_fin'];
    public function employe()
    {
        return $this->belongsTo(employe::class, 'employe_id');
    }
    public function shifttime()
    {
        return $this->belongsTo(shifttime::class, 'shifttime_id');
    }
}
