<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Properity extends Model
{
    use HasFactory;
    protected $table='properities';
    protected $fillable = [ 'name'];
    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_properity','properity_id', 'product_id')
                ->withPivot('value')
                ->withTimestamps();
    }
}
