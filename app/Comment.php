<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'body',
        'gallery_id',
        'user_id'
    ];
    public function users()
    {
        return $this->belongsTo(User::class);
    }
    public function galleries()
    {
        return $this->belongsTo(Gallery::class);
    }
}
