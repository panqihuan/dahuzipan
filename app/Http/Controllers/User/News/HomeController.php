<?php

namespace App\Http\Controllers\User\News;

use App\Model\News;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(Request $request) {
//        for($i=0; $i<100; $i++){
//            $news = new News();
//            $news->module = ['system', 'update'][rand(0, 1)];
//            $title = '';
//            for($chr=1; $chr<=rand(3, 10); $chr++){
//                $title .= chr(rand(97, 122));;
//            }
//            $news->title = $title;
//            $news->content = 'test';
//            $news->brief_introduction = 'test';
//            $news->start_time = date('Y-m-d H:i:s');
//            $news->state = 1;
//            $news->save();
//        }

        $view = 'user.news.list';

        $level = $request->get('level');
        if($level == 1){
            $view = 'user.news.index';
        }
        //  公告类型
        $typeArray =  ['system', 'update'];
        $type = $request->get('type', 'all');
        if(!in_array($type, $typeArray)){
            $type = 'all';
        }

        //  标题
        $titleArray = [
            'system' => '系统公告',
            'update' => '更新公告'
        ];
        $title = '';
        if(isset($titleArray[$request->get('type')])){
            $title = $titleArray[$request->get('type')];
        }else{
            $title = '全部公告';
        }

        $newsList = new News();
        if($level == 2 && $type!= 'all'){
            $newsList = $newsList->where('module', $request->get('type'));
        }
        $newsList = $newsList->paginate(10);

        return view($view, [
            'title' => $title,
            'type' => $request->get('type', 'all'),
            'newsList' => $newsList
        ]);
    }

    public function create(Request $request)
    {
        $view = 'user.news.create';

        $level = $request->get('level');
        if($level == 1){
            $view = 'user.news.create_index';
        }
        return view($view, [
            'type' => 'news/create',
            'title' => '公告添加'
        ]);
    }
}
