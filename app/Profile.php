<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
protected $guarded = [];

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/kHaVEdHwufrnPMh1HfsDeRWGb9EwC3VhZUoZr0FW.png';
        return '/storage/' . $imagePath;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
