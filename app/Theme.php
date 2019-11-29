<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Theme extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'backgroundColor',
        'textColor',
        'textFont'
    ];

    public function users(){
        return $this->hasMany(User::class);
    }
}