<?php

namespace App\Models;

use App\Models\Like;
use App\Models\User;
use App\Models\Comentario;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
  use HasFactory;

  protected $fillable = [
    'titulo',
    'descripcion',
    'imagen',
    'user_id'
  ];

  // Relación uno a muchos (inversa)

  public function user()
  {
    return $this->belongsTo(User::class)->select(['name', 'username']);
  }

  // Relación uno a muchos

  public function comentarios()
  {
    return $this->hasMany(Comentario::class);
  }

  // Relación muchos a muchos

  public function likes()
  {
    return $this->hasMany(Like::class);
  }
}
