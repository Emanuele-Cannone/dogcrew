<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'small',
        'body',
        'cover_image'
    ];

    public function images()
    {
        return $this->hasMany("App\Image");
    }

    public function section()
    {
        return $this->hasOne("App\Section");
    }

}
