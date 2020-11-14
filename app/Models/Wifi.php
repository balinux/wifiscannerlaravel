<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wifi extends Model
{
    protected $table='wifis';

    protected $fillable=[
        'device_id',
        'ssid',
        'bssid',
        'level',
        'frequency',
        'signal_level',
        'security',
        'lat',
        'long'
    ];
}
