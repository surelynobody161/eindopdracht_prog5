<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Art extends Model
{
    use HasFactory; // Vergeet niet de factory te gebruiken

    protected $table = 'arts';

    protected $fillable = [
        'title',
        'description',
        'category_id',
        'created_by',
        'art',
        'artist_id', // artist_id is goed opgenomen
    ];

    public function artist(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Artist::class, 'artist_id'); // 'artist_id' is de kolom in de arts tabel
    }
}
