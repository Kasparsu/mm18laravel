<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'body'
    ];
    protected $with = ['user'];
    protected $appends = [
        'displayBody',
        'excerpt',
        'author'
    ];
    public function getDisplayBodyAttribute(){
        return str_replace("\n", '<br>', $this->body);
    }

    public function getExcerptAttribute(){
        return explode("\n\n", $this->body)[0];
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getAuthorAttribute(){
        return $this->user->name;
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
