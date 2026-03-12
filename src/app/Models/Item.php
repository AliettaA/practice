<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Condition;
use App\Models\Comment;
use App\Models\User;
use App\Models\Like;
use App\Models\Purchase;


class Item extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'description',
        'price',
        'condition_id',
        'user_id',
        'status',
        'image',
    ];
    
    public function categories()
    {
    return $this->belongsToMany(Category::class);
    }
    
    public function condition()
    {
        return $this->belongsTo(Condition::class);
    }
    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
    
    public function purchases()
    {
        return $this->hasOne(Purchase::class);
    }
}
