@extends('layout.grzx')

@section('title',$title)


@section('content')


<div class="per_content_wrap" id="per_content_wrap">
    <div id="setting_box" class="fl">
        <div class="settings_title">
            <span>
                修改头像
            </span>
        </div>
        <?php 
        $a =session('uid');
        $res=DB::table( 'user')->where('uid',$a)->first(); 

        
        $arr = DB::table('user_details')->where('uid',$a)->first();


         //dd($arr); 
        ?>
            <div id="setting_form" class="setting_basic">
                <form action="/home/userdetails/updatetx/{{$res->uid}}" method="post" enctype='multipart/form-data'>
                  {{csrf_field()}}
                    <dl>
                        
                        <dd>
                            用户名：
                        </dd>
                        <dt class="unick uname" style="padding-top:5px;">
                            <span class="usernickname">
                                {{$res->uname}}
                            </span>
                            
                            
                        </dt>
                        

                          <dt >
                                        <label >当前头像 </label>
                                        <div >
                                            <div>
                                                <div>
                                                    <img src="{{$res->uic}}" alt="暂无图片">
                                                </div>
                                                
                                                     
                                                <input type="file" name="uic" multiple="">
                                            </div>

                                        </div>
                                    </dt>
                    </dl>

                        <button class="green_button r3 modifycomplete">提交修改</button>
                </form>
            </div>
    </div>
</div>




@endsection