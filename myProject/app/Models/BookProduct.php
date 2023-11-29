<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class BookProduct extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'firstname',
        'surname',
        'price',
        'pages'
    ];
    public function scopeFilter($query)
    {
        // dd(request('user_search'));
        if (request('user_search') ?? false) {
            $query->where('title', 'like', '%' . request('user_search') . '%');
        }
    }
}
