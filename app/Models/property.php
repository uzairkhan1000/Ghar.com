<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class property extends Model
{
    use HasFactory;
    protected $table = 'properties';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function user_fav()
    {
        return $this->belongsToMany(User::class,'property_user','property_id','user_id')->withPivot('property_id');
    }
    
}
