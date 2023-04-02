<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class IndexModel extends Model
{
    use HasFactory,Notifiable;

    protected $fillable = [
        'name',
        'number',
        'email',
        'course',
        'address'
    ];

    protected $table = "register_tbl";
}
