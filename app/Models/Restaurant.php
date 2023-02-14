<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = [
        'ruc',
        'local_name',
        'local_address',
        'type_local',
        'owner_name',
        'local_email',
        'local_tel',
        'description',
        'id_user'
    ];
    use HasFactory;
    public function image(){
        return $this->morphOne(Image::class,'imageable');
    }

    public function users()
    {
        return $this->belongsTo(User::class,'id_user');
    }

}
