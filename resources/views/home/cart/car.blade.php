@extends('layout.home')


@section('title',$title)



@section('content')
<?php  
  $uid = session('uid');

?>
    <link href="/home/car/index_002.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/home/car/bottom.css" media="all">
    <link href="/home/car/index.css" rel="stylesheet" type="text/css">
    
    
      <!-- 表格 -->
      
      <!-- 表格 end -->
    </script>
      <div class="g-wrap wrap">
        <ul class="clearfix cart_slide" id="cartSlide">
            <li>
                <a href="javascript:;" url="0" class="mr55 cart_slide_item cartSlideItemAll cart_slide_item_cur  ">
                    全部商品
                </a>
            </li>
            
        </ul>
        <!-- 不为空的情况 -->
        <?php 

            $arr = DB::table('car')->count();
         ?>  


         @if($arr>0)    
          
        <div class="iluck">
    <!-- 表格 -->
    <table class="cart_table">
        <tr>
            <th class="cart-product-remove">
                <input id="w" onclick="CheckAll(this.checked);" type="checkbox">
                全选
                </a>
            </th>
            <th class="cart_table_goods_wrap">
            </th>
            <th class="cart_table_goodsinfo_wrap">
                商品名称
            </th>
            <th class="cart_table_goodsinfo_wrap">
                商品信息
            </th>
            <th class="cart_table_goodsinfo_wrap">
                商品颜色
            </th>
            <th>
                单价(元)
            </th>
            <th class="cart_table_goodsnum_wrap">
                数量
            </th>
            <th class="cart_table_goodssum_wrap">
                小计(元)
            </th>
            <th class="cart_table_goodsctrl_wrap">
                操作
            </th>
        </tr>
        @foreach($res as $v)
        <tr class="cart_mitem  selected">
            <td class="cart_mitem  selected gitem" gid="{{$v->id}}">
                <input type="checkbox" name='ids[]' style="margin-left: 23px;" class="txt" cid="{{$v->id}}">
            </td>
            <td class="cart-product-thumbnail">
                <a href="#">
                    <img width="64" height="64" src="" alt="">
                </a>
            </td>
            <td class="cart-product-name">
                <a href="#">
                    {{$v->gname}}
                </a>
            </td>
            <td class="cart-product-name">
                <a href="#">
                    {{$v->size}}
                </a>
            </td>
            <td class="cart-product-name">
                <a href="#">
                    {{$v->color}}
                </a>
            </td>
            <td class="cart-product-price" style="text-align: center">
                ¥
                <span class="price">
                    {{$v->price}}
                </span>
            </td>
            <td class="cart-product-quantity" style="text-align: center">
                <div class="cart_num cart_counter">
                    <span class="cart_num_reduce">
                    </span>
                    <input class="cnt" type="text" name="quantity" value="1" class="qty" style="width: 30px;height: 23px; text-align: center;">
                    <span class="cart_num_add">
                    </span>
                </div>
            </td>
            <td class="cart_alcenter" style="text-align: center">
                ¥
                <span class="xiaoji">
                    {{$v->price}}
                </span>
            </td>
            <td class="cart-product-remove" style="text-align: center">
                <a href="javascript:void(0)" class="remove" title="Remove this item">
                    删除
                </a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
      @endif
      
      @if($arr == '0')

      <div class="cart_empty">
              <div class="cart_empty_icon"></div>

              <h5 class="mb20">您的购物车还是空的，赶快去挑选商品吧！</h5>
              <ul class="cart_empty_list">
                  <li>去看看大家都喜欢的<a href="/home/index" class="cart_red cart_uline">潮流单品</a></li>
                  
              </ul>
          </div>

        @endif

    </div>


        <script>




        </script>     
    




      

      <div class="cart_paybar wrap" >
          <a href="#" class="cart_paybtn fr cart_paybtn_disable"  id="e"> 去付款</a>


                  <div class="cart_paybar_info_cost cart_deep_red cart_bold cart_font26 cart_money fr goodsSum">
                    <span class="color lead">
                      <strong>¥</strong>
                    </span>

                    <span class="amounts color lead" id="money">
                      0
                    </span>
                  </div>
                  
            </div>
           

  


    



<script>


                   $('.cart_num_add').click(function(){

                  //获取数量的值
                  var pv = $(this).prev().val();
                  var gid = $(this).parents('tr').find('.gitem').attr('gid');

                 $.get('/home/car/add',{cnt:pv,id:gid},function(data){

                   

                 });

                  

                })
                 $('.cart_num_reduce').click(function(){

                  //获取数量的值
                  var mv = $(this).next().val();
                  //console.log(mv);
                  var gid = $(this).parents('tr').find('.gitem').attr('gid');

                  $.get('/home/car/jian',{cnt:mv,id:gid},function(data){

                   

                  });

                  

                })
                



 




  //加法运算
  $('.cart_num_add').click(function(){

    //获取数量的值
    var pv = $(this).prev().val();

    pv++;

    $(this).prev().val(pv);

    //获取单价
    var pr = $(this).parents('tr').find('.price').text();

    // console.log(typeof(pr));


    function accMul(arg1, arg2) {

            var m = 0, s1 = arg1.toString(), s2 = arg2.toString();

            try { m += s1.split(".")[1].length } catch (e) { }

            try { m += s2.split(".")[1].length } catch (e) { }

            return Number(s1.replace(".", "")) * Number(s2.replace(".", "")) / Math.pow(10, m)

        }


    $(this).parents('tr').find('.xiaoji').text(accMul(pr, pv));

    func()
  })


  //减法运算
  $('.cart_num_reduce').click(function(){

    var mv = $(this).next().val();

    mv--;

    if(mv <= 1){

      mv = 1;
    }

    $(this).next().val(mv);

    //获取单价
    var pr = $(this).parents('tr').find('.price').text();


    function accMul(arg1, arg2) {

          var m = 0, s1 = arg1.toString(), s2 = arg2.toString();

          try { m += s1.split(".")[1].length } catch (e) { }

          try { m += s2.split(".")[1].length } catch (e) { }

          return Number(s1.replace(".", "")) * Number(s2.replace(".", "")) / Math.pow(10, m)

      }

    $(this).parents('tr').find('.xiaoji').text(accMul(pr, mv));

    func()
  })

  



  


  //让总计发生改变
 

    
  

  function func(){

    var num = 0;

    $(':checkbox:checked').each(function(){


      var ji = $(this).parents('tr').find('.xiaoji').text();


      function accAdd(arg1,arg2){  
          var r1,r2,m;  
          try{r1=arg1.toString().split(".")[1].length}catch(e){r1=0}  
          try{r2=arg2.toString().split(".")[1].length}catch(e){r2=0}  
          m=Math.pow(10,Math.max(r1,r2))  
          return (arg1*m+arg2*m)/m  
      }

      
      
        $('.amounts').text(num = accAdd(num,ji));
      
        
          
         }) 

          var a = document.getElementById("money").innerHTML;
            if(a == 0){

              $('#e').html(`<a href="#" class="cart_paybtn fr cart_paybtn_disable"  id="e">去付款</a>`);
            } else {
              $('#e').html(`<a href="##/home/car/scdz" class="cart_paybtn fr"  id="e">去付款</a>`);
            
               $('#e').click(function(){
               
               $('.txt:checked').each(function(){
                
                  
                
               var gid =  $(this).attr('cid');

               console.log(gid);


                
                 $.get('/home/car/scdz',{id:gid},function(data){

                    console.log(data);
                  });
               
             });


            })




            }  
            
              
          
    }



      
    $('.txt').click(function(){


      $(this).attr('checked');
      
       
      $('.txt').each(function(){

      if(!$(this).is(':checked')){

        $('.amounts').text(0);
        $('#w').removeAttr('checked');
      }
      if($(this).is(':checked')){

        $('.amounts').text(0);
        $('#w').attr('checked',true);
      }


     })

    });       




  //全选or 反选
  function CheckAll(value){

    $(':checkbox').attr("checked",value);
     // func()


     $(':checkbox').each(function(){

      if(!$(this).is(':checked')){

        $('.amounts').text(0);
      }

     })
  }

   $(':checkbox').click(function(){
    func()
  })
  


  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });

  //发送cnt ajax


  //删除数据
  $('.remove').click(function(){

    var res = confirm('确定删除吗??');

    if(!res) return;

    var tr = $(this).parents('tr');

    //获取id
    var gid = $(this).parents('tr').find('.gitem').attr('gid');


    // console.log(gid);

    //发送ajax
    $.get('/home/car/del',{id:gid},function(data){

      console.log(data);
      if(data != '0'){
          
        tr.remove();

        func();

      } else {
        //第一种 刷新页面
        location.reload();
         // console.log(data);
        //第二种 不刷新页面   把table的内容进行替换成一张图片
     //    $('.iluck').html(`
      
     //      <div class="cart_empty">
     //          <div class="cart_empty_icon"></div>

     //          <h5 class="mb20">您的购物车还是空的，赶快去挑选商品吧！</h5>
     //          <ul class="cart_empty_list">
     //              <li>去看看大家都喜欢的<a href="http://www.mogujie.com/shopping/" class="cart_red cart_uline">潮流单品</a></li>
     //              <li>去看看正在折扣中的优品<a href="http://www.mogujie.com/tuan/" class="cart_red cart_uline">团购</a></li>
     //          </ul>
     //      </div>
     // `);
      }
    })
  })
</script>

        
@endsection