<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info_reservation extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = "info_reservation";

    protected $fillable = [
        'Username',
        'from_place',
        'to_place',
        'pick_up_date',
        'return_date',
        'pick_up_time',
        'return_time',
        'contact_number',
        'update_at'
    ];
}
