<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class workers extends Model
{
    use HasFactory;

    public function tickets() 
    {
        return belongsToMany (Ticket::class);
    }
}