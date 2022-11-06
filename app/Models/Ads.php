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
        'location',
        'bag_img',
        'contact_name',
        'user_name',
        'user_email',
        'phone',
    ];
}
