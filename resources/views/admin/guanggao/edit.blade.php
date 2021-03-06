@extends('layouts.admin') @section('title') 广告修改 @endsection @section('title','广告修改') @section('content')
<hr>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.all.min.js">
</script>
<script type="text/javascript" charset="utf-8" src="/ueditor/lang/zh-cn/zh-cn.js"></script>


<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span> 广告修改
        </div>
    </div>
    <div class="tpl-block">
        <div class="am-g">
            <div class="tpl-form-body tpl-form-line">
                <form class="am-form tpl-form-line-form" method="post" action="/guanggao/{{$Gg['id']}}" enctype="multipart/form-data">
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">发布人 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="user_id" class="tpl-form-input" id="user-name" placeholder="{{$Gg['user_id']}}" value="">
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">分类 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="xxcate_id" class="tpl-form-input" id="user-name" placeholder="{{$Gg['xxcate_id']}}" value="">
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label class="am-u-sm-3 am-form-label">商品简介</label>
                        <div class="am-u-sm-9">
                            <textarea class="" name="intro" rows="5" value="{{$Gg['intro']}}">{{$Gg['intro']}}</textarea>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-weibo" class="am-u-sm-3 am-form-label">商品图片 </label>
                        <div class="am-u-sm-9">
                            <div class="am-form-group am-form-file">

                                <div class="tpl-form-file-img">
                                    <img src="{{$Gg['image']}}" alt="">
                                </div>
                                <button type="button" class="am-btn am-btn-danger am-btn-sm">
                                    <i class="am-icon-cloud-upload"></i> 添加封面图片</button>
                                <input id="doc-form-file" type="file" name="image" ">
                            </div>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">商品成色 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="radio" name="cheng" value="9成新">90% &nbsp;
                            <input type="radio" name="cheng" value="9成新">80% &nbsp;
                            <input type="radio" name="cheng" value="9成新">70% &nbsp;
                            <input type="radio" name="cheng" value="9成新">50%
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">价格 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="money" class="tpl-form-input" id="user-name" placeholder="" value="{{$Gg['money']}}">
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">所在地 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="quyu" class="tpl-form-input" id="user-name" placeholder="" value="{{$Gg['quyu']}}">
                        </div>
                    </div>
                    
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">排序 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="orby" class="tpl-form-input" id="user-name" placeholder="" value="{{$Gg['orby']}}">
                        </div>
                    </div>

                    {{csrf_field()}}
                    {{ method_field('PUT') }}
                    <div class="am-form-group">
                        <div class="am-u-sm-9 am-u-sm-push-3">
                            <button class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button>
                        </div>
                    </div>
                </form>
                <script>
                var ue = UE.getEditor('editor');                
                </script>
            </div>
        </div>
    </div>
</div>
@endsection