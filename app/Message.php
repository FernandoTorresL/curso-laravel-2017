<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Message extends Model
{
    use Searchable;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getImageAttribute($image)
    {
        if (!$image || starts_with($image, 'http')) {
            return $image;
        }

        return \Storage::disk('public')->url($image);
    }

    //Adding method to add user field on the query
    public function toSearchableArray()
    {
        $this->load('user');
        return $this->toArray();
    }

    public function responses()
    {
        return $this->hasMany( Response::class)->latest();
    }
}
