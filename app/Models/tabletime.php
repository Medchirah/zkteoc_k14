<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tabletime extends Model
{
    use HasFactory;
    protected $fillable=['shifttime_id','employe_id','employe_nom','shifttime_name','date_debut','date_fin'];
}
