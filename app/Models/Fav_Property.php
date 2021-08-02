<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fav_Property extends Model
{
    use HasFactory;
    protected $table = 'property_user';
    public $timestamps = false;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function property()
    {
        return $this->belongsTo(property::class);
    }

}
