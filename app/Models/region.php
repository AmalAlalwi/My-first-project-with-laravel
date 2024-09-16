<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\models\invoic;
class region extends Model
{
    use HasFactory;
    public function invoics(){
        return $this->hasMany(invoic::class);
    }
}
