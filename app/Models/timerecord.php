<?php

namespace App\Models;

use App\Models\employe;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class timerecord extends Model
{
    use HasFactory;
    protected $fillable=['employe_id','device_id','time_in','time_out','durration'];
    public function device()
    {
        return $this->belongsTo(device::class);
    }
    public function employe()
    {
        return $this->belongsTo(employe::class);
    }
}
