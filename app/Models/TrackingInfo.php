<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrackingInfo extends Model
{
    use HasFactory;

    protected $table = 'tracking_info';

    protected $hidden = ['updated_at'];

    protected $casts = [
        'created_at'  => 'date:Y-m-d',
        'updated_at' => 'date:Y-m-d',
    ];

    protected $fillable = ['internal_client', 'client', 'module', 'language', 'url', 'width', 'height', 'browser', 'browser_version', 'java', 'mobile', 'os', 'osversion', 'cookies', 'track'];

}
