<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\Factory;


class Listing extends Model
{
  use HasFactory;


  /*  public static function all() {
        
    }*/

 // protected $fillable = ['title','logo','company','location','website','email','description','tags','user_id'] ;
  protected $fillable = ['title','logo','website','email','description','tags','user_id'] ;

  public static function find($id)
  {
    $listings = self::all();
    foreach ($listings as $listing) {
      if ($listing->id == $id) {
        return $listing;
      }
    }
  }

  public function scopeFilter($query, array $filter)
  {
    if ($filter['tag'] ?? false) {
      $query->where('tags','like','%'.request('tag').'%');
    }

    if ($filter['search'] ?? false) {
      $query->where('title','like','%'.request('search').'%')
        ->orWhere('description','like','%'.request('search').'%')
        ->orWhere('tags','like','%'.request('search').'%');
    }
  }

  public function user() {
    return $this->belongsTo(User::class,'user_id');
  }

  public function comments()
  {
    return $this->hasMany(Comment::class);
  }

  public function usersWhoFavorited()
  {
    return $this->belongsToMany(User::class, 'user_favorites')->withTimestamps(); 
  }

}
