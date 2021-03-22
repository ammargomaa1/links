<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'id',
        'link_id',
        'user_agent'
    ];

    public function link(){
        return $this->belongsTo(Link::class);
    }

    
}
