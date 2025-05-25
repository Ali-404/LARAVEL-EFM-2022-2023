<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ["title","body","categorie"];

    public function commentaires(){
        return $this->hasMany(Commentaire::class);
    }
}
