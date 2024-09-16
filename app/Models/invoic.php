<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\models\shopping_cart;
use App\Models\User;
use App\models\region;
class invoic extends Model
{
    use HasFactory;
    public function shopping_carts(){
        return $this->belongsTo(shopping_cart::class);

    }
    public function users()
    {
        return $this->belongsTo(user::class);
    }
    public function region()
    {
        return $this->belongsTo(region::class);
    }

}
