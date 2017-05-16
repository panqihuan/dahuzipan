
<style>
    .main_box{
        padding: 0 15px;
    }
    .main_box .news_box{

    }
    .main_box .news_box .news_title{
        height: 60px;
        line-height: 70px;
        font-size: 16px;
        text-indent: 10px;
        border-bottom: 1px solid #D0D0D0;
    }
    .main_box .news_box .news_list{
        padding: 15px 5px;
    }
    .main_box .news_box .news_list table {
        background: #FFF;
        font-size: 12px;
        margin-top: 8px;
        border: 1px solid #e1e6eb;
    }
    .main_box .news_box .news_list table tr th {
        background-color: #F5F6FA;
        padding: 12px 15px;
    }
    .main_box .news_box .news_list table tr td {
        padding: 15px;
        border-bottom: 1px solid #e1e6eb;
    }
</style>
<div class="news_box">
    <div class="news_title">{{$title}}</div>
    <div class="news_list">
        <table width="100%">
            <thead>
            <tr>
                <th width="60%">标题</th>
                <th width="20%">时间</th>
                <th width="20%">类型</th>
            </tr>
            </thead>
            @foreach($newsList as $news)
                <tr>
                    <td>{{$news->title}}</td>
                    <td>{{$news->created_at}}</td>
                    <td>{{$news->getType()}}</td>
                </tr>
            @endforeach
        </table>
    </div>
    {{$newsList->links()}}
</div>