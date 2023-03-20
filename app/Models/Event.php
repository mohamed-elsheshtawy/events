<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable=['name_ar','name_en','desc_ar','desc_en','media','date'];
    use HasFactory;
}
