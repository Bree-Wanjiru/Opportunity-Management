<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opportunity extends Model
{
    use HasFactory;

    

    //filter
    public function scopeFilter($query, array $filters)
    {
        //check
        if($filters['tag'] ?? false){
            $query->where('tags', 'like', '%'.request('tag').'%');
        }

        if($filters['search'] ?? false){
            $query->where('title', 'like', '%'.request('search').'%')
            
              ->orWhere('description', 'like', '%'.request('search').'%')
              ->orWhere('tags', 'like', '%'.request('search').'%');
        }
    }

    //relationship between opportunity and user(opportunity belongs to user)
     public function user() {
        return $this->belongsTo(User::class, 'user_id');
     }
}
