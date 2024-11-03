<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{


    // If you have a 'fillable' property, define it here
    protected $fillable = [
        'title',
        'description',
        'category_id',
        'created_by',
        'art',
        'is_alive',
    ];

    // Other model methods and relationships can go here
}
