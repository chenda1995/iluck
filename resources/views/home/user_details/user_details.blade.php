@extends('layout.grzx')

@section('title',$title)


@section('content')


<div class="per_content_wrap" id="per_content_wrap">
    <div id="setting_box" class="fl">
        <div class="settings_title">
            <span>
                基本资料
            </span>
        </div>
        <?php 
        $a =session('uid');
        $res=DB::table( 'user')->where('uid',$a)->first(); 

        
        $arr = DB::table('user_details')->where('uid',$a)->first();


         //dd($arr); 
        ?>
            <div id="setting_form" class="setting_basic">
                <form action="/home/userdetails/update" method="post" >
                  {{csrf_field()}}
                    <dl>
                        
                        <dd>
                            用户名：
                        </dd>
                        <dt class="unick uname" style="padding-top:5px;">
                            <span class="usernickname">
                                {{$res->uname}}
                            </span>
                            <input class="r3" name="id" value="{{$arr->id}}" type="hidden">
                            <input class="r3" name="uid" value="{{$arr->uid}}" type="hidden">
                        </dt>
                        <dd>
                            昵称：
                        </dd>
                        <dt class="unick uname" style="padding-top:5px;">
                            <input type="text" class="itxt"
                           name="name" value="{{$arr->name}}">
                        </dt>
                        <dd>
                            性别：
                        </dd>
                        <dt class="sex" style="line-height: 30px;">
                            <input name="sex" value="m" id="female" style="margin:0" type="radio"  
                            @if($arr->sex == 'm')
                            checked
                            @endif
                            >
                            女
                            <input name="sex" value="w" id="male" type="radio"
                            @if($arr->sex == 'w')
                            checked
                            @endif
                            >
                            男
                        </dt>
                       
                        
                        <dd>

                            <?php 
                            $a= $arr->born;
                            $a = explode(',',$a);
                           


                              ?>
                            生日：
                        </dd>
                        <dt class="birthday">
                            <select name="born[]" id="year">
                                
                                <option value="{{$a[0]}}" id="2012" selected="selected">
                                    {{$a[0]}}
                                </option>
                                <option value="2012" id="2012">
                                    2012
                                </option>
                                <option value="2011" id="2011">
                                    2011
                                </option>
                                <option value="2010" id="2010">
                                    2010
                                </option>
                                <option value="2009" id="2009">
                                    2009
                                </option>
                                <option value="2008" id="2008">
                                    2008
                                </option>
                                <option value="2007" id="2007">
                                    2007
                                </option>
                                <option value="2006" id="2006">
                                    2006
                                </option>
                                <option value="2005" id="2005">
                                    2005
                                </option>
                                <option value="2004" id="2004">
                                    2004
                                </option>
                                <option value="2003" id="2003">
                                    2003
                                </option>
                                <option value="2002" id="2002">
                                    2002
                                </option>
                                <option value="2001" id="2001">
                                    2001
                                </option>
                                <option value="2000" id="2000">
                                    2000
                                </option>
                                <option value="1999" id="1999">
                                    1999
                                </option>
                                <option value="1998" id="1998">
                                    1998
                                </option>
                                <option value="1997" id="1997">
                                    1997
                                </option>
                                <option value="1996" id="1996">
                                    1996
                                </option>
                                <option value="1995" id="1995">
                                    1995
                                </option>
                                <option value="1994" id="1994">
                                    1994
                                </option>
                                <option value="1993" id="1993">
                                    1993
                                </option>
                                <option value="1992" id="1992">
                                    1992
                                </option>
                                <option value="1991" id="1991">
                                    1991
                                </option>
                                <option value="1990" id="1990">
                                    1990
                                </option>
                                <option value="1989" id="1989">
                                    1989
                                </option>
                                <option value="1988" id="1988">
                                    1988
                                </option>
                                <option value="1987" id="1987">
                                    1987
                                </option>
                                <option value="1986" id="1986">
                                    1986
                                </option>
                                <option value="1985" id="1985">
                                    1985
                                </option>
                                <option value="1984" id="1984">
                                    1984
                                </option>
                                <option value="1983">
                                    1983
                                </option>
                                <option value="1982">
                                    1982
                                </option>
                                <option value="1981">
                                    1981
                                </option>
                                <option value="1980">
                                    1980
                                </option>
                                <option value="1979">
                                    1979
                                </option>
                                <option value="1978">
                                    1978
                                </option>
                                <option value="1977">
                                    1977
                                </option>
                                <option value="1976">
                                    1976
                                </option>
                            </select>
                            &nbsp;年&nbsp;
                            <select name="born[]" id="month">
                                <option value="{{$a[1]}}" selected="selected">{{$a[1]}}
                                </option>
                                <option value="01">
                                    01
                                </option>
                                <option value="02">
                                    02
                                </option>
                                <option value="03">
                                    03
                                </option>
                                <option value="04">
                                    04
                                </option>
                                <option value="05">
                                    05
                                </option>
                                <option value="06">
                                    06
                                </option>
                                <option value="07">
                                    07
                                </option>
                                <option value="08">
                                    08
                                </option>
                                <option value="09">
                                    09
                                </option>
                                <option value="10">
                                    10
                                </option>
                                <option value="11">
                                    11
                                </option>
                                <option value="12">
                                    12
                                </option>
                            </select>
                            &nbsp;月&nbsp;
                            <select name="born[]" id="day">
                                <option  value="{{$a[2]}}" selected="selected">{{$a[2]}}
                                </option>
                                <option value="01">
                                    01
                                </option>
                                <option value="02">
                                    02
                                </option>
                                <option value="03">
                                    03
                                </option>
                                <option value="04">
                                    04
                                </option>
                                <option value="05">
                                    05
                                </option>
                                <option value="06">
                                    06
                                </option>
                                <option value="07">
                                    07
                                </option>
                                <option value="08">
                                    08
                                </option>
                                <option value="09">
                                    09
                                </option>
                                <option value="10">
                                    10
                                </option>
                                <option value="11">
                                    11
                                </option>
                                <option value="12">
                                    12
                                </option>
                                <option value="13">
                                    13
                                </option>
                                <option value="14">
                                    14
                                </option>
                                <option value="15">
                                    15
                                </option>
                                <option value="16">
                                    16
                                </option>
                                <option value="17">
                                    17
                                </option>
                                <option value="18">
                                    18
                                </option>
                                <option value="19">
                                    19
                                </option>
                                <option value="20">
                                    20
                                </option>
                                <option value="21">
                                    21
                                </option>
                                <option value="22">
                                    22
                                </option>
                                <option value="23">
                                    23
                                </option>
                                <option value="24">
                                    24
                                </option>
                                <option value="25">
                                    25
                                </option>
                                <option value="26">
                                    26
                                </option>
                                <option value="27">
                                    27
                                </option>
                                <option value="28">
                                    28
                                </option>
                                <option value="29">
                                    29
                                </option>
                                <option value="30">
                                    30
                                </option>
                                <option value="31">
                                    31
                                </option>
                            </select>
                            &nbsp;日
                        </dt>
                        <dd>
                            职业：
                        </dd>
                        <dt class="profession">
                            <select id="profession" name="zhiye"  >
                                
                                <option value="白领" 

                                @if($arr->zhiye == '白领')
                                selected
                                @endif
                                >
                                    白领
                                </option>
                                <option value="学生" @if($arr->zhiye == '学生')
                                selected
                                @endif>
                                    学生
                                </option>
                                <option value="时尚妈咪"
                                @if($arr->zhiye == '时尚妈咪')
                                selected
                                @endif>
                                    时尚妈咪
                                </option>
                                <option value="模特"
                                @if($arr->zhiye == '模特')
                                selected
                                @endif>
                                    模特
                                </option>
                                <option value="时尚店主"
                                @if($arr->zhiye == '时尚店主')
                                selected
                                @endif>
                                    时尚店主
                                </option>
                                <option value="传媒"
                                @if($arr->zhiye == '传媒')
                                selected
                                @endif>
                                    传媒
                                </option>
                                <option value="艺术"
                                @if($arr->zhiye == '艺术')
                                selected
                                @endif>
                                    艺术
                                </option>
                                <option value="其他"
                                @if($arr->zhiye == '其他')
                                selected
                                @endif>
                                    其他
                                </option>
                            </select>
                        </dt>
                        <dd>
                            邮箱：
                        </dd>
                        <dt class="unick uname" style="padding-top:5px;">
                            <input type="text" class="itxt"
                           name="email" value="{{$arr->email}}">
                        </dt>
                        <dd>
                            手机：
                        </dd>
                        <dt class="unick uname" style="padding-top:5px;">
                            <input type="text" class="itxt"
                           name="tel" value="{{$res->tel}}">
                        </dt>
                        

                       
                    </dl>
                    <div class="settings_title mt30">
                        <span>
                            其他信息
                        </span>
                    </div>
                    <dl>
                        <dd>
                            自我介绍：
                        </dd>
                        <dt>
                            <textarea name="introduce" id="introduce" rows="10" class="r3">
                                {{$arr->introduce}}
                            </textarea>
                           
                        </dt>
                        <dd>
                            &nbsp;&nbsp;
                        </dd>
                        <dt>
                            <button class="green_button r3 modifycomplete">修改完成</button>
                            
                        </dt>
                    </dl>
                </form>
            </div>
    </div>
</div>

@endsection