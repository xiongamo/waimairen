<?php /* Smarty version Smarty-3.1.10, created on 2016-08-25 17:14:33
         compiled from "/data/wwwroot/waimairen/module/wxsite/template/shopcart.html" */ ?>
<?php /*%%SmartyHeaderCode:89456748857beb6f9eaca32-54734547%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e4caf1c322fd53171216c194702d892a5b2a80d' => 
    array (
      0 => '/data/wwwroot/waimairen/module/wxsite/template/shopcart.html',
      1 => 1454478286,
      2 => 'file',
    ),
    '3fbc4ede513af2ddd9912a12a8a8611f8354d73a' => 
    array (
      0 => '/data/wwwroot/waimairen/templates/m7/public/wxsite.html',
      1 => 1452504956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89456748857beb6f9eaca32-54734547',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tempdir' => 0,
    'siteurl' => 0,
    'is_static' => 0,
    'Taction' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_57beb6fa087c97_49863012',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57beb6fa087c97_49863012')) {function content_57beb6fa087c97_49863012($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_data')) include '/data/wwwroot/waimairen/lib/Smarty/libs/plugins/function.load_data.php';
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta name="MobileOptimized" content="320">
<meta http-equiv="Cache-Control" content="no-cache, must-revalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta name="HandheldFriendly" content="true">
<meta name="author" content="johnye">
<meta name="shenma-site-verification" content="f28da5e2e3fb6e2afd372a3eedfda998">
<meta name="baidu-site-verification" content="eafwEzRbnz">
<title><?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
</title> 
<link rel="stylesheet"  href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/css/public1.css"> 
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/css/newweixin.css"> 
  <link rel="stylesheet"  href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/newcss/index.css">
  <link rel="stylesheet"  href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/newcss/font-awesome.min.css">
   <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/css/newscrollbar.css">
 
<link rel="stylesheet"  href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/css/mycss.css">   

	<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/js/jquery.js"></script> 
  <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/js/public.js"></script>  
  <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/adminpage/public/js/allj.js"></script>  
   <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/js/swipe.js"></script> 
    <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/js/iscroll.js"></script> 
    <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/js/newiscroll.js"></script> 
  
  <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/js/wxshop.js"></script>  
  <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/js/template.min.js"></script> 
<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/wxsite/js/cart.js"></script>  
 <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=<?php echo $_smarty_tpl->tpl_vars['baidumapkey']->value;?>
"></script>
<script>
    var shopid = <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
;
    var cartbagcost =0;
    var cartpscost = 0;
    var  cartsum = 0;
    var cxcost = 0;
    var surecost = 0;
    var juanlist = <?php echo json_encode($_smarty_tpl->tpl_vars['juanlist']->value);?>
;
    var wxjuanlist = <?php echo json_encode($_smarty_tpl->tpl_vars['wxjuanlist']->value);?>
;
    var checknext = false;
    var timelist = <?php echo json_encode($_smarty_tpl->tpl_vars['timelist']->value);?>
;
    var backgoshop = '<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/shopshow/id/".((string)$_smarty_tpl->tpl_vars['id']->value)),$_smarty_tpl);?>
';
    var backadd = '<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/bkaddress/shopid/".((string)$_smarty_tpl->tpl_vars['id']->value)),$_smarty_tpl);?>
';
    $(function(){ 
    	 freshcart();
    	 maketime();
    
    	 
    	 $('#outpay').bind("click", function() {   
    	 	  $(this).find('li i').addClass('shopcaoaA onpay');
	         $('#outonline').find('li i').removeClass('shopcaoaA onpay');
	         
        });
    	  $('#outonline').bind("click", function() {   
	           $(this).find('li i').addClass('shopcaoaA onpay');
	         $('#outpay').find('li i').removeClass('shopcaoaA onpay');
	      
	      
        });
    	 
    	 
    	 
    	 
    });
    function myyanchi(){
  		
  		  checknext = false;
  	}
 </script>
  <script id="cartlist" type="text/html">   
 
   <li><span class="shopdetalistL"><^%=list.name%^><^%if(list.have_det==1){%^><font style="color:#ccc;font-size:10px;">【<^%=list.gg.attrname%^>】<font><^%}%^></span><span class="shopdetalistC">x<^%=list.count%^></span><span class="shopdetalistR">￥<^%=list.cost%^></span></li>
 
 </script>

<script> 
	var siteurl = "<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
";
	var is_static ="<?php echo $_smarty_tpl->tpl_vars['is_static']->value;?>
";
	var taction = "<?php echo $_smarty_tpl->tpl_vars['Taction']->value;?>
"; 
</script>

<script> 
		var myScroll;
		var outdiv = false;
		var myScroll2;
function loaded() {
	 
	myScroll = new iScroll('wrapper', {
		useTransform: false,
		bounce:false,
		onBeforeScrollStart: function (e) {
			var target = e.target;
			while (target.nodeType != 1) target = target.parentNode;

			if (target.tagName != 'SELECT' && target.tagName != 'INPUT' && target.tagName != 'TEXTAREA')
				e.preventDefault();
		}
	});
  
  
}
document.addEventListener('touchmove', function (e) { e.preventDefault(); }, false); 
document.addEventListener('DOMContentLoaded', function () { setTimeout(loaded, 200); }, false);
</script>

 

 
</head>
<body> 
<style>
.page-app{ background:#f0f0f0;}
body{background:#f0f0f0;}
</style>
<div id="loading" style="display: block;"><div class="loadingbox"><section class="ffffbox"><div class="loadingpice"></div></section></div></div> 
<!-- <div id="hallist">  -->
	
  
<!--标题-->
 <?php echo smarty_function_load_data(array('assign'=>"info",'table'=>"address",'type'=>"one",'where'=>"id='".((string)$_smarty_tpl->tpl_vars['id']->value)."' and userid = '".((string)$_smarty_tpl->tpl_vars['member']->value['uid'])."'",'fileds'=>"*"),$_smarty_tpl);?>
 

	<!--标题-->
<div class="toptitCon">
 <div class="toptitBox addressbox" >
 <div class="toptitL" ><i></i></div>
  <div class="toptitC"><h3>购物车下单</h3></div>
  </div>
 
 <div class="mapaddressbox toptitBox" style="display:none; padding:0px; height:49px;">
 <!--搜索框-->
 
<div class="searchCon" >
 <div class="toptitL" style="margin-top:5px;"><i></i></div>
 <div class="searchBox" style="float:left; margin-left:15px; width:80%; height:32px;">
 <input style="height:32px; line-height:32px; padding-left:25px; font-size:14px;width:100%;" type="text" id="searchKeywords"  onkeyup="getscraddress();" placeholder="搜索地址"><i></i></div>
</div>

</div>
 
 
</div>



	
	 

<div id="gdcart">
 
 
	 <div id="wrapper" style="top:40px;bottom:54px; "> 
	<div id="scroller">
	
	 
	

	<!--已存在地址-->
	<?php if ($_smarty_tpl->tpl_vars['deaddress']->value['contactname']!=''||$_smarty_tpl->tpl_vars['deaddress']->value['phone']!=''||$_smarty_tpl->tpl_vars['deaddress']->value['address']!=''){?>
<div class="shopcaorderadd" onclick="changeaddress2();">
 <ul>
  <li class="shopcaoaddL">
   <div class="shopcaoaddLname">
   <span id="show_myname"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['deaddress']->value['contactname'])===null||$tmp==='' ? '' : $tmp);?>
</span>
   <span id="show_sex"><?php if ($_smarty_tpl->tpl_vars['deaddress']->value['sex']==1){?>先生<?php }?><?php if ($_smarty_tpl->tpl_vars['deaddress']->value['sex']==2){?>女士<?php }?></span>
   <b id="show_myphone"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['deaddress']->value['phone'])===null||$tmp==='' ? '' : $tmp);?>
</b></div>
   <div class="shopcaoaddLad" id="show_myaddress"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['deaddress']->value['address'])===null||$tmp==='' ? '' : $tmp);?>
</div>
  </li>
  <li class="shopcaoaddR"><i class="fa fa-angle-right"></i></li>
 </ul>
</div>
	<?php }else{ ?>
	 
		
	<!--未保存地址-->
<div class="shopcaorderadd"   onclick="changeaddress2();">
 <ul>
  <li class="shopcaoaddL"><span class="shopcaoaddLq"><i class="shopicoadd"></i>添加/选择收货地址</span></li>
  <li class="shopcaoaddR"><i class="fa fa-angle-right"></i></li>
 </ul>
</div>
	
	<?php }?> 
	
	
	
<!--配送时间-->
<div class="shopcaorderCon">
 <ul  id="Timeposition">
  <li class="shopcaodername">配送时间</li>
  <li class="shopcaoderbox"  onclick="doselectTime();" id="DeliveryTimesm" >未选择配送时间</li>
  <input type="hidden" name="DeliveryTime" id="DeliveryTime" value="0">
 </ul>
 <ul>
  <li><input type="text" placeholder="添加备注" name="remark" class="shopremar"></li>
 </ul>
</div>	
	
	
<!--支付方式-->

<div class="shopcaorderCon"  id="payway">

<?php if (!(($_smarty_tpl->tpl_vars['open_acout']->value==0||$_smarty_tpl->tpl_vars['shopinfo']->value['is_onlinepay']==0)&&($_smarty_tpl->tpl_vars['is_daopay']->value==0||$_smarty_tpl->tpl_vars['shopinfo']->value['is_daopay']==0))){?>
	<?php if ($_smarty_tpl->tpl_vars['is_daopay']->value==1&&$_smarty_tpl->tpl_vars['shopinfo']->value['is_daopay']==1){?>
		 <ul  id="outpay" >
		  <li class="shopcaodername">货到付款</li>
		  <li class="shopcaoderbox"><i  data="0" class="shopcaoderxz shopcaoaA onpay"></i><input type="radio"  class="shopayment"></li>
		 </ul>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['open_acout']->value==1&&$_smarty_tpl->tpl_vars['shopinfo']->value['is_onlinepay']==1){?>
		 <ul  id="outonline">
		  <li class="shopcaodername">在线支付</li>
		  <li class="shopcaoderbox"><i  data="1" class="shopcaoderxz <?php if ($_smarty_tpl->tpl_vars['is_daopay']->value==0||$_smarty_tpl->tpl_vars['shopinfo']->value['is_daopay']==0){?> shopcaoaA  onpay  <?php }?>"></i><input type="radio"   class="shopayment"></li>
		 </ul>
	<?php }?>
 <?php }else{ ?>
 
  <ul>
  <li class="shopcaodername">未开启支付</li>
  <li class="shopcaoderbox"><i class="shopcaoderxz"></i><input type="radio"   class="shopayment"></li>
 </ul>
 
 
<?php }?>
 
</div>	

<?php if ($_smarty_tpl->tpl_vars['member']->value['uid']>0){?>
<!--优惠券-->
<div class="shopcaorderCon" >
 <ul  id="yhjposition">
  <li class="shopcaodername">优惠券</li>
  <li class="shopcaoderbox" ><span class="shopcoupon"  onclick="doselectjuan();" id="juanshuoming">未使用优惠券<i class="fa fa-angle-right"></i></span></li>
   <input type="hidden" name="juanid" id="juanid" value="0"><input type="hidden" name="juancost" id="juancost" value="0">
 </ul>
</div>


<!--积分抵扣-->
<div class="shopcaorderCon" >
 <ul  id="jifenposition">
  <li class="shopcaodername">积分抵扣</li>
  <li class="shopcaoderbox" ><span class="shopcoupon"  onclick="doselectjifen('<?php echo $_smarty_tpl->tpl_vars['scoretocost']->value;?>
','<?php echo (($tmp = @$_smarty_tpl->tpl_vars['member']->value['score'])===null||$tmp==='' ? 0 : $tmp);?>
');" id="jifenshuoming">选择抵扣金额<i class="fa fa-angle-right"></i></span></li>
   <input type="hidden" name="jifen" id="jifen" value="0">
 </ul>
 
</div>
<?php }?>

<!--订单清单-->
<div class="shopcaorderCon">
 <ul>
  <li class="shopcaodername"><?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['shopname'];?>
</li>
  <li class="shopcaoderbox"><span class="shopdiatc"><?php if ($_smarty_tpl->tpl_vars['shopinfo']->value['sendtype']==0){?>网站<?php }else{ ?>商家<?php }?>配送</span></li>
 </ul>
</div>

<div class="shopdetalistCon">
 <div class="shopdetalistBox">
  <ul  id="shocart">
   
   
  </ul>
  <ul id="nextshocart">
   
  </ul>
 </div>
</div>	
 
  
  
  <script>
	$(function(){
		$("#mask1").click(function(){
			$("#mask1").hide();
			$("#popup1").hide();
		});
	});
	
  </script>
  
 <div id="mask1">
	  </div>
	  <div id="popup1" class="popup1" style="background:none; border:none;"> 
	  	 <div class="popcontent" id="popcontent" style="width:70%; background:#fff; margin:0 auto;">
	  	 	    
	  	 	  
	  	 	   
	  	 </div>
	  </div>
	  
	  
 </div>
 
</div>
<!--区域信息-->
  
 <div id="footer" class="box_inline" style="position:fixed; bottom:0px; left:0px;border:none;height:58px;background-color:#f4f4f4;">

    <div class="mybottom" style="position:fixed; bottom:0px; left:0px;">
      
     	<div class="intexchabutt"  onclick="orderSubmit();" style="margin-top:15px;"><input type="button"  value="立即下单" class="intexbg1"></div>
     </div>
     
     
     </div>

     </div>
 
 
 
 
 
 
 
 
 <div class="addressmask" id="otheraddress" style="display:none;">
    <div id="addareass_1">
     <div class="addressbox">

<!--联系人-->
<div class="newaddCon">
 <div class="newaddtit"><h3>联系人</h3></div>
 <div class="newaddBox">
  <ul class="newadd">
   <li><a>姓名：</a><input type="text" placeholder="请填写收货人的姓名" id="contactname" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['contactname'];?>
" name="" class="newinp"></li>
   <li>
    <ul>
     <li><label><input type="radio" value="1" <?php if (!empty($_smarty_tpl->tpl_vars['info']->value)){?> <?php if ($_smarty_tpl->tpl_vars['info']->value['sex']==1){?>checked<?php }?> <?php }else{ ?>checked<?php }?> name="sex" checked="checked"><i class="newaddio1"></i></label><span>先生</span></li>
     <li><label><input type="radio" value="2" name="sex" <?php if ($_smarty_tpl->tpl_vars['info']->value['sex']==2){?>checked<?php }?>  ><i class="newaddio2"></i></label><span>女士</span></li>
    </ul>
   </li>
   <li><a>手机：</a><input type="text" placeholder="请填写收货人手机号" id="mobile" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['phone'];?>
" class="newinp"></li>
  </ul>
 </div>
</div>
<!--收货地址-->
<input type="hidden" name="add_addressid" value="0"  >
<div class="newaddCon">
 <div class="newaddtit"><h3>收货地址</h3></div>
 <div class="newaddBox">
  <ul class="newadd">
   <li style=" height:44px; ">
   <a style="float:left;">小区/大厦/学校：</a>
   <div lng="<?php echo $_smarty_tpl->tpl_vars['info']->value['lng'];?>
" lat="<?php echo $_smarty_tpl->tpl_vars['info']->value['lat'];?>
"  style="float:left; height:44px; line-height:44px;" type="text" onclick="getmapaddress();" class="newinp1"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['info']->value['bigadr'])===null||$tmp==='' ? '点击选择地址' : $tmp);?>
</div></li>
   <div class="clear"></div>
   <li><a>楼号-门牌号：</a><input type="text" placeholder="例：16号楼107室" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['detailadr'];?>
" class="newinp2"></li>
  </ul>
 </div>
</div>
<div class="intexchabutt" onclick="saveaddress();"><input type="button" value="保存" class="intexbg1"></div>
</div>

 
 
 <div class="mapaddressbox"  style="display:none;">
	<div class="showmapbox">
		 <div class="mapditu" id="map">
			
		 </div>
		 <div id="marker_red_sprite"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/upload/map/marker_red_sprite.png" /></div>
	</div>
 
	
<div id="choiceguidebox" >
	<ul>
		<!--  <li>
			<div class="addresslist">
				<p class="choicegudie">郑州大学新校区</p>
				<p class="choicedetgudie">郑州大学新校区郑州大学新校区郑州大学新校区郑州大学新校区</p>
			</div>
		</li>   -->
	</ul>
</div>
</div>


 

    </div>
	<div id="address_2">
	     
	  
	</div>
 </div>
   <script type="text/javascript"> 
    	
     $(function(){     
      // var heightvar = $(window).height() -70;
     
	  getadmylist();
       
     });
	 //获取素有用户数据   
	 function getadmylist(){
	  if(checknext ==  false){ 
    	 checknext = true; 
     	$('#loading').show();
		$('#address_2').html('');
     	  url ='<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/myajaxadlist/random/@random@/datatype/json"),$_smarty_tpl);?>
';
     	  url = url.replace('@random@', 1+Math.round(Math.random()*1000));
           $.ajax({         //script瀹氫箟
                 url: url.replace('@random@', 1+Math.round(Math.random()*1000)),
                 dataType: "json",
                 async:true,
                 data:{},
                 success:function(content) { 
                 	if(content.error ==  false){
					  if(content.msg.length == 0){
					     $('#addareass_1').show();
						    $('#address_2').hide();
						 
					  }else{
					      $('#address_2').show();
						   $('#addareass_1').hide();
						  var tempcontent = '<div class="myaddressCon"   onclick="edite_myaddress(this)"   id_data="" contactname="" sex="" phone=""  lat=""  lng=""   bigadr="点击选择地址"   detailadr=""   add_new=""  > <div class="myaddressBox"><i>添加收货地址</i></div> </div> ';
							$('#address_2').append(tempcontent);
							
 						   for(var i=0;i<content.msg.length;i++){
						       var tempinfo = content.msg[i]; 
							   
							   
											if (tempinfo.sex == 1){
												var sexname = '先生';
											}else if (tempinfo.sex == 2){
												var sexname = '女士';
											} 
											if (tempinfo.default == 1){
												var defaultdiv = ' <i  id="default_icon_'+tempinfo.id+'" class="difyd"></i> ';
											}else{
												var defaultdiv = ' <i  id="default_icon_'+tempinfo.id+'"  class="difwb setdefault"   gid="'+tempinfo.id+'"></i> ';
											}
											if (tempinfo.default == 1){
												var setdefault = ' 	  <span  id="default_text_'+tempinfo.id+'">默认地址</span> ' ;
											}else{
												var setdefault = ' 		  <span   id="default_text_'+tempinfo.id+'" class="setdefault"    gid="'+tempinfo.id+'">设为默认</span> ';
											}
											
											if( tempinfo.bigadr == '' && tempinfo.detailadr == ''  &&  tempinfo.address != ''  ){
												var addressshow =  ' <li><p>'+tempinfo.address+'</p></li>  ';
											}else{
												var addressshow =  ' <li><p>'+tempinfo.bigadr+'<span>'+tempinfo.detailadr+'</span></p></li>  ';
											}
											 if( tempinfo.bigadr == '' && tempinfo.detailadr == ''  &&  tempinfo.address != ''  ){
												var  setaddress =  '   	 	 <li  id="dosho_my_'+tempinfo.id+'"  id_data="'+tempinfo.id+'" contactname="'+tempinfo.contactname+'" sex="'+tempinfo.sex+'" phone="'+tempinfo.phone+'"  lat=""  lng=""   bigadr=""    detailadr=""   add_new="'+tempinfo.address+'"  onclick="edite_myaddress(this)" class="bjddress"  gid="'+tempinfo.id+'"><a><i class="fa fa-edit"></i>编辑</a></li> '
											}else{
												var  setaddress = '   	 	 <li  id="dosho_my_'+tempinfo.id+'"  id_data="'+tempinfo.id+'" contactname="'+tempinfo.contactname+'" sex="'+tempinfo.sex+'" phone="'+tempinfo.phone+'"  lat="'+tempinfo.lat+'"  lng="'+tempinfo.lng+'"   bigadr="'+tempinfo.bigadr+'"    detailadr="'+tempinfo.detailadr+'"   add_new="'+tempinfo.address+'"  onclick="edite_myaddress(this)" class="bjddress"  gid="'+tempinfo.id+'"><a><i class="fa fa-edit"></i>编辑</a></li> '
											}
											
											
							   
 							   var tempcontentlist = '<div class="defaultadd"> '
											 +'   	 <div class="defaultaddt"> '
											 +'   	  <div class="difaultbox"> '
											 +'   	   <ul class="difaultbot"> '
											+'   	 	<li> '
											+'   	 	 <ul class="difaultxx"> '
											+'   	 	  <li><a>'+tempinfo.contactname+'</a></li> '
											+'   	 	  <li><b>'+sexname+'</b></li> '
											+'   	 	  <li><span>'+tempinfo.phone+'</span></li> '
											+'   	 	 </ul> '
											+'   	 	</li> '
											+'   	    '+addressshow+'	 '
											 +'   	   </ul> '
											 +'   	  </div> '
											+'   	  </div> '
											+'   	  <div class="defaultaddb"> '
											+'   	   <div class="difaultbox"> '
											+'   	    <ul class="difaultl"  onclick="semy_isdefault('+tempinfo.id+');" > '
											+'   	 	<li><label><input type="radio" name="sex" checked="checked">'+defaultdiv+' </label></li> '
											+'   	 	<li> '+setdefault+'</li> '
											+'   	    </ul> '
											+'   	    <ul class="difaultr"> '
											+'   	   '+setaddress+' ' 
											+'   	 	<li class="deladdress" onclick="deladdress('+tempinfo.id+');"  gid="'+tempinfo.id+'"><a><i class="fa fa-trash"></i>删除</a></li> '
											+'   	    </ul> '
											+'   	   </div> '
											+'   	  </div> '
											+'   	 </div>';  
						 
							    $('#address_2').append(tempcontentlist);
								
								
								
								
							 
							   
						   }
					 
						   
						   
						 
					  }
                 	    	//alert(content.msg.length);
                 	}else{
                 		Tmsg(content.msg);
                 	}
                  	$('#loading').hide();
                 
                 },
                 error:function(){
                  $('#loading').hide();
                 }
        }); 
        setTimeout("myyanchi()", 500 );
	 
	    }    
	
	 }
	 function edite_myaddress(obj){ 
		 $('#contactname').val($(obj).attr('contactname'));
		 if($(obj).attr('sex') == 1){
			 $('input[name="sex"]').eq(0).attr("checked",'checked'); 
		 }
		 if($(obj).attr('sex') == 2){
			$('input[name="sex"]').eq(1).attr("checked",'checked'); 
		 }
		 $('#mobile').val($(obj).attr('phone'));		 
		 $('.newinp1').attr('lng',$(obj).attr('lng'));
		 $('.newinp1').attr('lat',$(obj).attr('lat'));
		 $('.newinp1').text($(obj).attr('bigadr'));
		 $('.newinp2').val($(obj).attr('detailadr'));
		 		 
	     $('input[name="add_addressid"]').val($(obj).attr('id_data'));
		  $('#address_2').hide("slow");
         $('#addareass_1').show("slow"); 
		 
		 
		 

	 }
	
	 function semy_isdefault(myadid){
	     $("#gdcart").show("slow");
	       $('#otheraddress').hide("slow");
		  var info = {'addressid':myadid}; 
	      var url = '<?php echo FUNC_function(array('type'=>'url','link'=>"/wxsite/setmydefadid/random/@random@/datatype/json"),$_smarty_tpl);?>
';
		  var backdata = ajaxback(url,info); 
		  if(backdata.flag == false){ 
		 
		  $(".difaultl li span").text('设为默认');
		  $(".difaultl li i").removeClass('difyd');
		  $(".difaultl li i").addClass('difwb');
		  $('#default_icon_'+myadid).addClass('difyd');
		  $('#default_text_'+myadid).text('默认地址');
		  $('#show_myname').text($('#dosho_my_'+myadid).attr('contactname'));
		  $('#show_myphone').text($('#dosho_my_'+myadid).attr('phone'));
		  if( $('#dosho_my_'+myadid).attr('sex') == 1 ){
			$('#show_sex').text('先生');
		  }
		   if( $('#dosho_my_'+myadid).attr('sex') == 2 ){
			$('#show_sex').text('女士');
		  }
		  $('#show_myaddress').text($('#dosho_my_'+myadid).attr('add_new'));
		  
		  
		  
		  }else{ 
		     Tmsg(backdata.content);
		  }
	 }
	 function changeaddress2(){
		$(".toptitC h3").text('管理地址');
		 
		
	   $("#gdcart").hide("slow");
	   $('#otheraddress').show("slow");
	 }
	 
	 function deladdress(gid){ 
 	  	$('#loading').show();
 			 
	         	var info = {'tijiao':'del','addressid':gid};
	        	var url = '<?php echo FUNC_function(array('type'=>'url','link'=>"/area/deladdress/random/@random@/datatype/json"),$_smarty_tpl);?>
';
	        	    url = url.replace('@random@', 1+Math.round(Math.random()*1000));
	          var backinfo = ajaxback(url,info);
	          if(backinfo.flag ==  false){
	             location.reload();  
	          }else{
	          	$('#loading').hide();
	             Tmsg(backinfo.content);
	          } 
 	 }
     
    	</script>
		

<script>
var map,market;
var biaoqianval = false;
function bqzhi(){
	biaoqianval  = false;
}
 $(function(){
 
	getscraddress();
	 
 
 });
 
function getmapaddress(){
	$(".addressbox").hide();
	$(".mapaddressbox").show();
	var screenheight = ($(window).height())*0.5;
	$(".mapditu").css('height',screenheight);
	getLocation();
}
function getmapshow(lng,lat){
	var map = new BMap.Map("map");  
	var point = new BMap.Point(lng,lat);  
	map.centerAndZoom(point, 15);  
	map.enableScrollWheelZoom();
	map.enableContinuousZoom();
	showmapnearadr(lng,lat); 
	//map.enableKeyboard(); //键盘方向键缩放事件
	map.addEventListener("dragend", function(){   //拖拽事件  
	 var center = map.getCenter();   
	 showmapnearadr(center.lng,center.lat);
	 
	});
}
function getdefaultmapshow(lng,lat){
	var map = new BMap.Map("map");  
	var point = new BMap.Point('<?php echo $_smarty_tpl->tpl_vars['lng']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['lat']->value;?>
');  
//	var point = new BMap.Point(113.597715,34.802461);  
	map.centerAndZoom(point, 15);  
	map.enableScrollWheelZoom();
	map.enableContinuousZoom();
//	showmapnearadr(113.597715,34.802461);
	showmapnearadr('<?php echo $_smarty_tpl->tpl_vars['lng']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['lat']->value;?>
'); 
	//map.enableKeyboard(); //键盘方向键缩放事件
	map.addEventListener("dragend", function(){   //拖拽事件  
	 var center = map.getCenter();     
	 showmapnearadr(center.lng,center.lat);
	 
	});
	
}
function showmapnearadr(lng,lat){
	 $.getScript('http://api.map.baidu.com/geocoder/v2/?ak=<?php echo $_smarty_tpl->tpl_vars['baidumapkey']->value;?>
&callback=renderReverse&location='+lat+','+lng+'6&output=json&pois=1'); 
}
function renderReverse(datas){
	 
	 if(datas.status == 0){
	 	$("#choiceguidebox ul").html('');
		 /* 
		 {"addr":"河南省郑州市中原区华淮小区11栋",
		 "cp":"NavInfo",
		 "direction":"附近",
		 "distance":"40",
		 "name":"华淮小区11栋",
		 "poiType":"房地产",
		 "point":{"x":113.60700002968,"y":34.736593865518},
		 "tag":"房地产;住宅区","tel":"","uid":"97389a78371b6f76b020a838","zip":""}
		 
		 */
	 if( datas.result.business != '' ){		 
			$('#choiceguidebox ul').append('<li lat="'+datas.result.location.lat+'"  lng="'+datas.result.location.lng+'"  address="'+datas.result.business+'"  ><div class="addresslist" ><p class="choicegudie" style="color:red;">[推荐位置]'+datas.result.business+'</p><p class="choicedetgudie" >'+datas.result.formatted_address+'</p></div></li>');
		}
		if(datas.result.pois.length > 0){
			//	$("#choiceguidebox ul").html('');
				for(i=0;i<datas.result.pois.length;i++){
				
					$('#choiceguidebox ul').append('<li lat="'+datas.result.pois[i].point.y+'"  lng="'+datas.result.pois[i].point.x+'"  address="'+datas.result.pois[i].name+'"  ><div class="addresslist"><p class="choicegudie">'+datas.result.pois[i].name+'</p><p class="choicedetgudie">'+datas.result.pois[i].addr+'</p></div></li>');
					
					
				}
					setTimeout("bqzhi()",200 );
					 myScroll.refresh();
			
			}else{
		//	$("#choiceguidebox ul").html('');
			 $('#choiceguidebox ul').append('<li><div class="addresslist" style="text-align:center;"><p class="choicegudie">获取地址失败</p><p class="choicedetgudie" style="text-align:center;">请在尝试下</p></div></li>');
			
			setTimeout("bqzhi()",200 );
			 myScroll.refresh();
			}
			
			 $("#choiceguidebox ul li").bind('click',function(){
				var lng = $(this).attr('lng');
				var lat = $(this).attr('lat');
				var address = $(this).attr('address');
				choiceaddress(lng,lat,address);
			})
		
	 }
}
 
function getscraddress(){ 
	if(biaoqianval == false){
	  
		//	 setTimeout("bqzhi()",500 );  
			 
		
						var searchval  = $("#searchKeywords").val();
						
						if(searchval != ''){ 
					
								biaoqianval  = true;
									  
									var searchvalue = encodeURI(searchval);
									  var tempurl = 'http://api.map.baidu.com/geocoder/v2/?address='+searchvalue+'&output=json&ak=<?php echo $_smarty_tpl->tpl_vars['baidumapkey']->value;?>
&callback=showLocation';
									 $.getScript(tempurl); 
						  
					
						} 
	}

}
function showLocation(datas){
	$("#choiceguidebox ul").html(''); 
	if(datas.status == 0){
		var lng = datas.result.location.lng;
		var lat = datas.result.location.lat;
		showmapnearadr(lng,lat);
	}
}
function choiceaddress(lng,lat,address){
	$(".mapaddressbox").hide();
	$(".addressbox").show();
	$(".newinp1").attr('lng',lng);
	$(".newinp1").attr('lat',lat);
	$(".newinp1").text(address);
}
function getLocation() { 
  if (navigator.geolocation)
    { 
       navigator.geolocation.getCurrentPosition(showPosition,showError);
    }
   else{
		getdefaultmapshow();
	}
  }

function showPosition(position)
{ 	
	var lng = position.coords.longitude;
	var lat = position.coords.latitude;
	getmapshow(lng,lat);
}
 function showError(error)
  {
  getdefaultmapshow();
   switch(error.code) 
    {
    	
    case error.PERMISSION_DENIED:
      //x.innerHTML="User denied the request for Geolocation."
    //  $('#showareainfo').text("User denied the request for Geolocation.");
      break;
    case error.POSITION_UNAVAILABLE:
     // x.innerHTML="Location information is unavailable."
      //$('#showareainfo').text("Location information is unavailable.");
      break;
    case error.TIMEOUT:
    //  x.innerHTML="The request to get user location timed out."
    //$('#showareainfo').text("The request to get user location timed out.");
      break;
    case error.UNKNOWN_ERROR:
     // x.innerHTML="An unknown error occurred."
     //  $('#showareainfo').text("An unknown error occurred.");
      break;
    }
     
  }
function saveaddress(){ 
		$('#loading').show();
		var sex = $("input[name='sex']:checked").val();
		var bigadr = $(".newinp1").text();
		var detailadr = $(".newinp2").val();
		var lng = $(".newinp1").attr('lng');
		var lat = $(".newinp1").attr('lat');
		var tempaddress = $(".newinp1").text()+$(".newinp2").val();
        var info = {'contactname':$('#contactname').val(),'sex':sex,'lng':lng,'lat':lat,'phone':$('#mobile').val(),'bigadr':bigadr,'detailadr':detailadr,'add_new':tempaddress,'addressid':$('input[name="add_addressid"]').val()}; 
	  	var url = '<?php echo FUNC_function(array('type'=>'url','link'=>"/area/saveaddress/random/@random@/datatype/json"),$_smarty_tpl);?>
';
		  var backdata = ajaxback(url,info); 
		  if(backdata.flag == false){ 
		  	 $("#gdcart").show("slow");
			$('#otheraddress').hide("slow");
			   window.location.reload();
			   getadmylist();
		  }else{
		  	$('#loading').hide();
		     Tmsg(backdata.content);
		  }
		  
	} 
</script>
 
 <!--底部-->

 

   
<!-- </div> -->

<script>
	$(function(){
		if( taction  == 'index' ){		
			$(".icon_home").next().css('color','#ff6e6e');
			$(".icon_home").css('backgroundPosition','0px -23px');		
		}
		if( taction  == 'member' ){		
			$(".icon_phone").next().css('color','#ff6e6e');
			$(".icon_phone").css('backgroundPosition','-92px -23px');		
		}
		if( taction  == 'order' ){		
			$(".icon_user").next().css('color','#ff6e6e');
			$(".icon_user").css('backgroundPosition','-23px -23px');		
		}
			if( taction  == 'togethersay' ){		
			$(".icon_order").next().css('color','#ff6e6e');
			$(".icon_order").css('backgroundPosition','-69px -23px');		
		}
	});
</script>
 <script>
 	$(function(){  		
 	   $('#loading').hide(); 
  });
  </script>
  
  
</body>
</html>
 <?php }} ?>