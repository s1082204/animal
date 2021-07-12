<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;
    //
    protected $fillable = [
        'ani_id' ,'ani_name' ,'ani_info' ,'ani_gentle'
    ];
}
