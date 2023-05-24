<?php

namespace App\Models;

use App\Models\employe;
use App\Models\timerecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class device extends Model
{
    use HasFactory;
    
    protected $fillable=['nomDevice','adress_ip','connect','port'];
    
    public function timerecord()
    
    {
        return $this->hasMany(timerecord::class);
    }
    public function employe()
    
    {
        return $this->hasMany(employe::class);
    }
}
