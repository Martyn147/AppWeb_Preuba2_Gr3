<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'last_name',
        'address',
        'movil',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function image(){
        return $this->morphOne(Image::class,'imageable');
    }

}
