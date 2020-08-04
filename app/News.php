<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table ='news';
    protected $fillable =['judul', 'id', 'headline', 'isi', 'penulis'];
}
