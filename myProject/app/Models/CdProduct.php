<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CdProduct extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'firstname',
        'band',
        'price',
        'playlength'
    ];
    public function scopeFilter($query)
    {
        // dd(request('user_search'));
        if (request('user_search') ?? false) {
            $query->where('title', 'like', '%' . request('user_search') . '%');
        }
    }
}
