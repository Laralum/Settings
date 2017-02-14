<?php

namespace Laralum\Settings\Models;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    public $table = 'laralum_settings';
    public $fillable = [
        'appname',
    ];
}
