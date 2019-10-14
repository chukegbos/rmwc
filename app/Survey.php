<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

class Survey extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'user_id', 'reading_rate', 'reading hour', 'reason', 'quest', 'book_interest', 'author', 'books_read', 'status'
    ];

    protected $dates = [
        'deleted_at', 
    ];
}