
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
    .main_box .news_box .news_create{
        margin-top: 20px;
        border: 1px solid #F0F0F0;
        width: 1250px;
    }
    .main_box .news_box .news_create .create_item{
        border-bottom: 1px solid #F4F4F4;
    }
    .main_box .news_box .news_create .create_item:last-child{
        border-bottom: 0;
    }
    .main_box .news_box .news_create .create_item .create_item_left{
        height: 60px;
        width: 150px;
        float: left;
        line-height: 60px;
        font-size: 14px;
        padding-left: 30px;
    }
    .main_box .news_box .news_create .create_item .create_item_right{
        min-height: 60px;
        width: calc(100% - 150px);
        float: left;
    }
    .main_box .news_box .news_create .create_item .create_item_right input{
        display: block;
        height: 34px;
        line-height: 34px;
        padding-left: 10px;
        width: calc(100% - 20px);
        margin-top: 13px;
        font-size: 14px;
        border: 1px solid #E4E4E4;
    }
    .main_box .news_box .news_create .create_item .create_item_right .wangEditor-container{
        margin: 13px 0;
        width: calc(100% - 20px);
        height: 400px;
    }
    .main_box .news_box .news_create .create_item .create_item_right select{
        margin: 13px 0;
        height: 34px;
        width: calc(100% - 20px);
    }
</style>
<div class="news_box">
    <div class="news_title">{{$title}}</div>
    <div class="news_create">
        <div class="create_item clear">
            <div class="create_item_left">公告</div>
            <div class="create_item_right"><input name="title"/></div>
        </div>
        <div class="create_item clear">
            <div class="create_item_left">公告内容</div>
            <div class="create_item_right">
                <textarea id="news_content"></textarea>
            </div>
        </div>
        <div class="create_item clear">
            <div class="create_item_left">发布时间</div>
            <div class="create_item_right">内容</div>
        </div>
        <div class="create_item clear">
            <div class="create_item_left">公告类型</div>
            <div class="create_item_right">
                <select>
                    <option value="0">请选择</option>
                    <option value="0">系统公告</option>
                    <option value="0">更新公告</option>
                </select>
            </div>
        </div>
        <div class="create_item clear">
            <div class="create_item_left">标题</div>
            <div class="create_item_right">内容</div>
        </div>
    </div>
</div>

<script>
    $(function(){
        $('[main_slug]').click(function(){
            alert(1);
            return false;
        });
        $('[slug]').click(function(){

            alert(1);
            return false;
        });
        var editor = new wangEditor('news_content');

        editor.config.uploadImgUrl = '/upload';

        // 表情
        editor.config.emotions = {
            'default': {
                title: '默认',
                data: './wangEditor/test/emotions.data'
            }
        };

        editor.create();
    })
</script>