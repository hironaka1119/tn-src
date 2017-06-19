<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageInfos extends Model {

    /**
     * 日付へキャストする属性
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'page_info';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['page_url', 'page_title', 'page_desc', 'page_keyword', 'delete_at'];

    public function scopePageInfoGet($query, $url){
        return $query->where('page_url', $url);
    }
}
