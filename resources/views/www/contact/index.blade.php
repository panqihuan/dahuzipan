
<script>
    {!! file_get_contents(public_path('js/www/contact/index.js')) !!}
</script>
<style>
    {!! file_get_contents(public_path('css/www/contact/index.css')) !!}
</style>

<div class="contact-box contact-show">
    <div class="box-title">
        @for($i=0; $i<mb_strlen("We leverage technology to accomplish great vision."); $i++)
            <span>{{trim("We leverage technology to accomplish great vision."[$i]) ?: '&nbsp;'}}</span>
        @endfor
    </div>
    <div class="contact-left">
        <div class="contact-init">
            <div class="title">联系我们</div>
            <div class="information">联系信息</div>
            <div class="information-content">
                <p>
                    嘉兴景观设计师协会
                    <br>
                    500个优美的设计案例
                    <br>
                    浙江省嘉兴市嘉善县乔克大厦2号楼905
                    <br>
                    联系电话 : 15067363421
                    <br>
                    协会座机 : 0573-88888888
                </p>
            </div>
            <a href="" class="go-contact">前往联系</a>
        </div>
        <div class="contact-address">
            <div class="address-content">
                <div class="address-title">嘉兴景观设计师协会</div>
                <div class="address-route">乔克大厦2号楼905</div>
                <div class="address-route">浙江省嘉兴市嘉善县</div>
                <div class="address-direction">
                    <a href="">获得路线</a>
                </div>
            </div>
            <div class="address-logo">
                <img src="{{asset('image/20170307103982648264.jpg')}}"/>
            </div>
        </div>
    </div>
    <div class="contact-right">
        <div class="contact-table-title">填写联系信息</div>
        <div class="contact-table-box clear">
            <div class="table-input">
                <label>姓名</label><input name="name">
            </div>
            <div class="table-input">
                <label>手机</label><input type="tel" name="name">
            </div>
            <div class="table-input">
                <label>你是景观设计师吗?</label>
                <select>
                    <option>请选择</option>
                    <option>是</option>
                    <option>否</option>
                </select>
            </div>
            <div class="table-input">
                <label>了解渠道</label>
                <select>
                    <option>请选择</option>
                    <option>网络</option>
                    <option>熟人介绍</option>
                </select>
            </div>
            <div class="table-input">
                <label>省份</label><input name="name">
            </div>
            <div class="table-input">
                <label>城市</label><input name="name">
            </div>
            <div class="table-input">
                <label>QQ / 微信</label><input name="name">
            </div>
        </div>
    </div>
</div>