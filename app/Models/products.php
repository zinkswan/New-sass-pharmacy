<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    public $table = 'products';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;

}
