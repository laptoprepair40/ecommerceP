<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table='products';
    protected $fillable = [ 'price','quantity', 'category_id'  ];
    public function properities()
    {
        return $this->belongsToMany(Properity::class, 'product_properity', 'product_id', 'properity_id')
                ->withPivot('value')
                ->withTimestamps(); 
    }
    public function orders()
    {
        return $this->belongsToMany(Client::class, 'orders','product_id', 'client_id')
                ->withPivot('statu','price')
                ->withTimestamps();
    }
    public function images(){
        return $this->hasMany(Image::class, 'product_id' );
    }
    public function category(){
        return $this->belongsTo(Category::class, 'category_id' ); 
    }
}
