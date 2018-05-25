@extends('layout.grzx')

@section('title',$title)


@section('content')

<link href="/home/dizhi/index.css" rel="stylesheet" type="text/css">
<link href="/home/dizhi/index.css-93c948fe.css" rel="stylesheet" type="text/css">
<script src="/home/jquery-1.8.3.min.js"></script>
 <?php 

 	$a = session('uid');
 	$res = DB::table('address')->where('uid',$a)->get();
 	// echo '<pre>';
 	// var_dump($res);
       
       
  ?>
<div id="address_wrap">
    <div class="addr_right topay" isaddress="true">
        <h2 class="addr_title">
            预览信息 &nbsp; <a href="/home/dizhiedit">添加信息>></a>
        </h2>
        @foreach($res as $v)
        
        <div class="addr_edit" id="J_s_addr_edit" style="margin-bottom: -60px;">
            
            <div class="addr_section " aid="567699303">
                <ul class="clearfix">
                    <li class="name">
                        {{$v->name}}
                    </li>
                    <li class="addr" >
                        {{$v->diqu}}&nbsp;{{$v->address}}
                    </li>
                    <li class="zcode">
                    </li>
                    <li class="mobile">
                        {{$v->tel}}
                    </li>
                    <li class="oper">

                        <a href="##" class="moren"  cid="{{$v->id}}">
                            @if($v->auth == '0')
                            设为默认地址
                            @endif
                            @if($v->auth == '1')
                            默认地址
                            @endif
                        </a>
                       
                        <a href="/home/dizhiupdate/{{$v->id}}" class="edit" >
                            编辑
                        </a>
                        <a href="/home/dizhidel/{{$v->id}}" class="del nobd" >
                            删除
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    
        @endforeach
    </div>
</div>
<script>
    
    $('.moren').each(function(){
       $(this).click(function(){
       var id =  $(this).attr('cid');
       $.get('/home/dizhi/auth',{id:id},function(data){
            if(data){
                alert('默认设置成功啦');
                 }
             });
       $(this).text('默认地址');
       $(this).parents('.addr_edit').siblings().find('.moren').text('设为默认地址');
       })
    })

</script>


@endsection