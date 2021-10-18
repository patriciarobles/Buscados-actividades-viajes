<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = array('activity_id', 'number', 'price','date_booked','date_activity');
    protected $table = 'booking';
}
