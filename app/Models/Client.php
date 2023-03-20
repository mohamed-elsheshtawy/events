<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable=['title_ar','title_en','desc_ar','desc_en','media'];

    use HasFactory;
}
