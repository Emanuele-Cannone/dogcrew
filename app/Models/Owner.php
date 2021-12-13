<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;


    protected $fillable = [
        "name",
        "surname",
        "birdthday",
        "address",
        "second_name",
        "city",
        "cap",
        "telephone_number",
        "notes",
        "image",
        "owner_type_id"
    ];

    public function ownerType()
    {
        return $this->hasOne(ownerType::class);
    }
}
