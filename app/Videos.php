<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
    // 資料表名稱
    protected $table = 'videos';
    // 主鍵名稱
    protected $primaryKey = 'id';
    // 可以大量指定異動的欄位（Mass Assignment）
    protected  $fillable = [
        'title',
        'category',
        'author',
        'video_id',
        'views_num',
        'likes_num',
    ];
}
