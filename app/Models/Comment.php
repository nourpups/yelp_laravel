<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
class Comment extends Model implements HasMedia

{
  use HasFactory,InteractsWithMedia;
  protected $table = 'comments';

  protected $fillable = [
    'username',
    'text',
    'organisation_id',
    'user_id',
    'rate',
    'parent_comment_id',
  ];

  public function organisation()
  {
    return $this->belongsTo(Organisation::class);
  }

}
