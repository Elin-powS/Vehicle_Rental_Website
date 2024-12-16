<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quick_reservation extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = "quick_reservation";

    protected $fillable = [
        'Username',
        'place_from',
        'place_to',
        'pick_up_date',
        'pick_up_time',
        'contact_number',
    ];
}
