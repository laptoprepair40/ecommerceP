<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $table='clients';
    protected $fillable = [ 'name','lastName', 'phone' , 'country', 'state' , 'city', 'street'];
    public function products()
    {
        return $this->belongsToMany(Product::class, 'orders', 'client_id','product_id')
                ->withPivot('statu','price')
                ->withTimestamps();
    }
}
