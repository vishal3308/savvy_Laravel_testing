<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Google_calendar extends Model
{
    use HasFactory;
    protected $table="google_calendars";
    protected $primarykey='id'; 
}
