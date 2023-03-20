<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Exhibition;
class MediaExhibition extends Model
{ 
    protected $fillable=['exhibition_id','media'];  

    use HasFactory;
    public function exhibition()
    {
        return $this->belongsTo(Exhibition::class);
    }
}
