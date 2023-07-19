<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $table = 'Categories';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
}
