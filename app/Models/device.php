<?php

namespace App\Models;

use App\Models\timerecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class device extends Model
{
    use HasFactory;
    
    protected $fillable=['nom','adress_ip','connect'];
    
    public function timerecord()
    
    {
        return $this->hasMany(timerecord::class);
    }
}
