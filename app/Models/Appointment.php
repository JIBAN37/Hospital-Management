<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use app\Notifications\SendEmailNotification;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    use Notifiable;
}
