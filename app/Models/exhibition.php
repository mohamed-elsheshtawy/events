<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\mediaExhibition;
class Exhibition extends Model
{
    protected $fillable=['name_ar','name_en','desc_ar','desc_en','media'];  
    use HasFactory;
    public function all_media(){
        return $this->hasMany(MediaExhibition::class,'exhibition_id');
    }
}
