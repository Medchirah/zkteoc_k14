<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class timerecord extends Model
{
    use HasFactory;
    protected $fillable=['employe_id','device_id','time_in','time_out','durration'];
    public function device()
    {
        return $this->belongsTo(device::class);
    }
}
