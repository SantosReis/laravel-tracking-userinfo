<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrackingInfo extends Model
{
    use HasFactory;

    protected $table = 'tracking_info';

    protected $fillable = ['internal_client', 'client', 'module', 'language', 'url', 'date', 'width', 'height', 'browser', 'browser_version', 'java', 'mobile', 'os', 'osversion', 'cookies', 'track'];

}
