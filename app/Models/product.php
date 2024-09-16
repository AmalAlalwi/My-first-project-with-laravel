<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\category;
use App\models\brand;
use App\models\shopping_cart;

class product extends Model
{
    use HasFactory;
    //السماح بأخال بيات
    protected $fillable=['product_name','category_id','brand_id','price','img','size','color', 'product_count'];
    public function categories(){
        return $this->belongsTo(category::class);
    }
    use HasFactory;
    public function brands()
    {
        return $this->belongsTo(brand::class);
    }
    use HasFactory;
    public function shopping_carts()
    {
        return $this->belongsToMany(shopping_cart::class)->withPivot('quantity');
    }
    use SoftDeletes;
}
