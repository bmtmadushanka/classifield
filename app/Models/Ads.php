<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'found_date',
        'found_time',
        'location',
        'bag_img'
    ];
}
