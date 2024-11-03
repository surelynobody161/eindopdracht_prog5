<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Art extends Model
{
    /**
     * @var bool|mixed
     */
    public mixed $is_for_sale;
    protected $table = 'arts';
    protected $fillable = [
        'title',
        'description',
        'category_id',
        'created_by',
        'art',
        'is_alive',
    ];

}
