<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'url',
        'nameProduct',
        'typeOfTea',
        'description',
        'price'
    ];
    public function status()
    {
        return $this ->belongsTo(TypeOfTea::class, 'typeOfTea');
    }
}
