<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    use HasFactory;

    public function room()
    {
        return $this->hasOne(Room::class);

    }

    protected $guarded = [''];
}
