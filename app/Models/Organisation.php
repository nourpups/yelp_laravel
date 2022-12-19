<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

class Organisation extends Model
{
    use HasFactory;
  protected $fillable = [
    'legal_name',
    'description',
    'source',
    'inn',
    'location',
    'head_person_name',
    'logo'
  ];
  public function categories()
   {
    return $this->belongsToMany(Category::class)->using(CategoryOrganisation::class);
   }
   public function comments()
   {
       return $this->hasMany(Comment::class);
   }
   public function root_comments() {
    return $this->hasMany(Comment::class, 'organisation_id', 'id')->whereNull('parent_comment_id');
   }
   public function suggestion_comments()
   {
       return $this->hasMany(Comment::class, 'organisation_id', 'id')
           ->orderBy('rate', 'desc')
           ->with('media')
           ->has('media')
           ->limit(10);
   }
   public function scopeApiFilter(Builder  $q)
   {
       $q->when(request('organisation_id'), function ($q) {
           $q->where('id', request('organisation_id'));
       })
       ->whereNotNull('inn');
   }


}
