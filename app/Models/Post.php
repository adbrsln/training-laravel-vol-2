<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //mass assignment configurations
    protected $guarded = ['id'];
    protected $fillable = [
        'title',
        'body',
        'user_id'
    ];

    //relationships one to many
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
