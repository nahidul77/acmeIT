<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Popular extends Model
{
    protected $fillable = ['speed','price', 'limit', 'optics', 'ip', 'support', 'image', 'created_by', 'updated_by'];
}
