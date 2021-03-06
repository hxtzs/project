@extends('layouts.admin') 
@section('title') 发表商品添加 @endsection 
@section('title','发表商品添加') 

@section('content')
<hr>
<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span> 发表商品添加
        </div>
    </div>
    <div class="tpl-block">
        <div class="am-g">
            <div class="tpl-form-body tpl-form-line">
                <form class="am-form tpl-form-line-form" method="post" action="/shangpin" enctype="multipart/form-data">
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">商品图片 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="file" name="image" class="tpl-form-input" id="user-name" placeholder="">
                           
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">商品简介 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="intro" class="tpl-form-input" id="user-name" placeholder="">
                            
                        </div>
                    </div>

                    

                     <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">成色 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                           <input type="radio" name="cheng" value="9成">9成
                           <input type="radio" name="cheng" value="8成">8成
                           <input type="radio" name="cheng" value="7成">7成
                           <input type="radio" name="cheng" value="6成">6成
                            
                        </div>
                    </div>



                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">价格 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="money" class="tpl-form-input" id="user-name" placeholder="">
                            
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">三级联动 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="quyu" class="tpl-form-input" id="user-name" placeholder="">
                            
                        </div>
                    </div>

					{{csrf_field()}}
                    <div class="am-form-group">
                        <div class="am-u-sm-9 am-u-sm-push-3">
                            <button class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection