<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Types extends Model
{
    public $table = 'types';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
}
