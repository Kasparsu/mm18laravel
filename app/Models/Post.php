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
    public function getDisplayBodyAttribute(){
        return str_replace("\n", '<br>', $this->body);
    }

    public function getExcerptAttribute(){
        return explode("\n\n", $this->body)[0];
    }
}
