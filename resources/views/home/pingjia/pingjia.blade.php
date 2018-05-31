@extends('layout.grzx')

@section('title',$title)


@section('content')
<script src="/sanji/jquery-3.2.1.min.js"></script>
<div class="per_content_wrap" id="per_content_wrap">
	<div id="setting_box" class="fl">
    	<div class="settings_title">
        	<span>
            	评价
        	</span>
    	</div>
    	<div id="setting_form" class="setting_basic">
        	<form action="/home/pjdo" method="post" class="infomodify">
            	<dl>
                    
            	    <dd>
            	        满意度：
            	    </dd>
            	    <dt class="start" style="line-height: 30px;">
            	        <input name="start" value="1" type="radio">
            	        1分
            	        <input name="start" value="2" type="radio">
            	        2分
            	        <input name="start" value="3" type="radio">
            	        3分
            	        <input name="start" value="4" type="radio">
            	        4分
            	        <input name="start" value="5" type="radio">
            	        5分
            	    </dt>                                       
            	</dl>
            	<div class="settings_title mt30">
                	<span>
                    	内容
                	</span>
            	</div>
            	<dl>
                	<dd>
                	    说点什么：
                	</dd>
                	<dt>
                	    <textarea name="text"  rows="10" class="r3">
                	        随便写点什么吧。
                	    </textarea>
                	</dt>
                    <input type="hidden" name="gid" value="{{$id}}" class="gid">
                  
                	<dd>
                	    &nbsp;&nbsp;
                	</dd>
                	<dt>
                		{{csrf_field()}}
                		<button class="green_button r3 modifycomplete" id="bnt" cid = "{{$gid}}" >
                				立即评价
                		</button>
                        <script>
                            $('#bnt').click(function(){
                                var id = $(this).attr('cid');

                               

                                 $.get('/home/gai',{id:id},function(data){
                                    //console.log(data);
                                    
                                 })


                            })
                        </script>
                		
                	</dt>
                </dl>
            </form>
        </div>
    </div>
</div>
@endsection