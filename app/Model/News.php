<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    public function getType() {
        return [
            'system' => '系统公告',
            'update' => '更新公告'
        ][$this->module];
    }
}
