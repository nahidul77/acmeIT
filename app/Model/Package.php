<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = ['price','speed', 'limit', 'optics', 'ip', 'support', 'created_by', 'updated_by'];
}
