<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;
    protected $fillable=[
        
            'title',
            'description',
            'price',
            'feature1',
            'feature2',
            'feature3',
            'feature4',
    ];
}
