<?php

namespace App\Models;

use App\Models\employe;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class departement extends Model
{
    use HasFactory;
    protected $fillable=['nomDept'];
    public function employe()
    {
        return $this->hasMany(employe::class);
    }
}
