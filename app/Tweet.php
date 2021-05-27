<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use Likable;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getFileAttribute($value)
    {
          return asset($value ?: '/images/default-avatar.jpeg');
        
    }

public function setFileAttribute($value)
    {
        $this->attributes['file'] = asset('images/' . $value);
    }

}
