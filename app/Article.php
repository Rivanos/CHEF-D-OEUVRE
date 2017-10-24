<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ["name", "content", "price", "path_img", "category", "under_content", "heart_attack", "most_sell", "show_index"];
}
