<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\models\product;
use App\models\users;
use App\models\invoic;
class shopping_cart extends Model
{
    protected $guarded=[];
    use HasFactory;
    public function products(){
        return $this->belongsToMany(product::class)->withPivot('quantity');
    }
    public function users(){
        return $this->belongsTo(user::class);
    }
    public function invoics(){
        return $this->hasOne(invoic::class);
    }
}
