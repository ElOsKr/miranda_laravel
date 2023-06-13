<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    use HasFactory;
    protected $primaryKey = 'room_id';
    public $incrementing = false;
    protected $keyType = 'string';
}
