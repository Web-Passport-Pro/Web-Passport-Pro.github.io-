<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
<title>log in : Glype control panel</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<script type="text/javascript">var offsetx=12;var offsety=8;function newelement(a){if(document.createElement){var b=document.createElement('div');b.id=a;with(b.style){display='none';position='absolute'}b.innerHTML='&nbsp;';document.body.appendChild(b)}}var ie5=(document.getElementById&&document.all);var ns6=(document.getElementById&&!document.all);var ua=navigator.userAgent.toLowerCase();var isapple=(ua.indexOf('applewebkit')!=-1?1:0);function getmouseposition(e){if(document.getElementById){var a=(document.compatMode&&document.compatMode!='BackCompat')?document.documentElement:document.body;pagex=(isapple==1?0:(ie5)?a.scrollLeft:window.pageXOffset);pagey=(isapple==1?0:(ie5)?a.scrollTop:window.pageYOffset);mousex=(ie5)?event.x:(ns6)?clientX=e.clientX:false;mousey=(ie5)?event.y:(ns6)?clientY=e.clientY:false;var b=document.getElementById('tooltip');b.style.left=(mousex+pagex+offsetx)+'px';b.style.top=(mousey+pagey+offsety)+'px'}}function tooltip(a){if(!document.getElementById('tooltip'))newelement('tooltip');var b=document.getElementById('tooltip');b.innerHTML=a;b.style.display='block';document.onmousemove=getmouseposition}function exit(){document.getElementById('tooltip').style.display='none'}window.domReadyFuncs=new Array();window.addDomReadyFunc=function(a){window.domReadyFuncs.push(a)};function init(){if(arguments.callee.done)return;arguments.callee.done=true;if(_timer)clearInterval(_timer);for(var i=0;i<window.domReadyFuncs.length;++i){try{window.domReadyFuncs[i]()}catch(ignore){}}};if(document.addEventListener){document.addEventListener("DOMContentLoaded",init,false)}/*@cc_on@*//*@if(@_win32)document.write("<script id=__ie_onload defer src=javascript:void(0)><\\/script>");var script=document.getElementById("__ie_onload");script.onreadystatechange=function(){if(this.readyState=="complete"){init()}};/*@end@*/if(/WebKit/i.test(navigator.userAgent)){var _timer=setInterval(function(){if(/loaded|complete/.test(document.readyState)){init()}},10)}window.onload=init;if(!window.XMLHttpRequest){window.XMLHttpRequest=function(){return new ActiveXObject('Microsoft.XMLHTTP')}}function runAjax(a,b,c,d){var e=new XMLHttpRequest();var f=b?'POST':'GET';e.open(f,a,true);e.setRequestHeader("Content-Type","application/x-javascript;");e.onreadystatechange=function(){if(e.readyState==4&&e.status==200){if(e.responseText){c.call(d,e.responseText)}}};e.send(b)}</script>
<script type="text/javascript">window.addDomReadyFunc(function(){document.getElementById('username').focus();});</script>
<style type="text/css">body{margin:0;font-size:62.5%;font-family:Verdana, Arial, Helvetica, sans-serif;padding:15px 0;background:#eee}#wrap{width:820px;margin:0 auto;background:url(/admin.php?image=bg.gif) top center repeat-y #FFF}#top_content{padding:0 10px}#topheader{padding:25px 15px 15px;margin:0 auto;background:url(/admin.php?image=top_left.gif) top left repeat-x #85C329}#rightheader{float:right;width:375px;height:40px;color:#FFF;text-align:right}#rightheader p{padding:35px 15px 0 0;margin:0;text-align:right}#title{padding:0;margin:0;font-size:2.5em;color:#FFF}#title span{font-size:0.5em;font-style:italic}#title a:link,#title a:visited{color:#FFF;text-decoration:none}#title a:hover{color:#E1F3C7}#navigation{background:#74A8F5;border-top:1px solid #fff;height:25px;clear:both}#navigation ul{padding:0;margin:0;list-style:none;font-size:1.1em;height:25px}#navigation ul li{display:inline}#navigation ul li a{color:#FFF;display:block;text-decoration:none;float:left;line-height:25px;padding:0 16px;border-right:1px solid #fff}#navigation ul li a:hover{background:#5494F3}#content{padding:15px;margin:0 auto;background:url(/admin.php?image=content_bg.gif) repeat-x left top #fff;color:#666}#content h1,#content h2,#content h3,#content h4,#content h5{color:#74A8F5}#content h1{font-family:"Trebuchet MS", Arial, Helvetica;padding:0;margin:0 0 15px;font-size:2em}#content h2{font-family:"Trebuchet MS", Arial, Helvetica;padding:0;margin:0 0 15px;font-size:1.5em}#top_body,#content_body{padding:0 25px}#footer{background:url(/admin.php?image=footer.gif) no-repeat center bottom;color:#FFF;padding:0 10px 13px}#footer p a:link,#footer p a:visited{color:#FFF;font-style:italic;text-decoration:none}#footer #footer_bg{background:url(/admin.php?image=footer_bg.gif) repeat-x left bottom #85C329;padding:15px 15px 25px;border-top:1px solid #7BB425}#footer #design{display:block;width:150px;height:30px;float:right;line-height:20px;padding:0 5px;text-align:right;color:#E1F3C7}#footer #design a,#rightheader a:link,#rightheader a:visited{color:#FFF;text-decoration:underline}.table{margin-bottom:15px;width:100%;border-collapse:collapse}.table_header td a:link,.table_header td a:visited{text-decoration:underline;color:#467aa7}.table_header td{background:url(/admin.php?image=tableheader-bg.gif) no-repeat left top;padding:5px 10px;color:#467aa7;border-top:1px solid #CBD6DE;border-bottom:1px solid #ADBECB;font-size:1.1em;font-weight:bold;border:1px solid #CBD6DE}.row1 td,.row2 td,.row3 td,.row_hover td,.paging_row td{padding:5px 10px;color:#666;border:1px solid #CBD6DE}.row1 td{background:#fff}.row2 td{background:#f6f6f6}.row3 td{background:#eee}.row1:hover td,.row2:hover td,.row3:hover td{background:#FBFACE;color:#000}.hidden{display:none}#content .little{font-size:9px}.clear{clear:both}.img_left{float:left;padding:1px;border:1px solid #ccc;margin:0 10px 10px 0}#content ul{font-size:1.1em;line-height:1.8em;margin:0 0 15px;padding:0;list-style-type:none}#content p{font-size:1.2em;margin:0;padding:0 0 15px;line-height:150%}#content p a:hover,.table a:hover,.form_table a:hover,.link a:hover{text-decoration:underline}#content ul.green li{padding:0 0 0 20px;margin:0;background:url(/admin.php?image=bullet_green.gif) no-repeat 1px 3px;font-size:1.1em}#content ul.black li{padding:0 0 0 20px;margin:0;background:url(/admin.php?image=bullet_grey.gif) no-repeat 1px 3px;font-size:1.1em}#content ul.black li a:link,#content ul.black li a:visited{color:#666;text-decoration:none}#content ol{padding:0 0 0 25px;margin:0 0 15px;line-height:1.8em}#content ol li{font-size:1.1em}#content ol li a:link,#content ol li a:visited,#content ul.green li a:link,#content ul.green li a:visited,#content p a,#content p a:visited,.table a,.table a:visited,.form_table a,.link a{color:#73A822;text-decoration:none}#content ol li a:hover,#content ul.green li a:hover,.table_header td a:hover{color:#73A822;text-decoration:underline}#content p.paging{padding:5px;border:1px solid #CBD6DE;text-align:center;margin-bottom:15px;background:#eee}.small_input{font-size:10px}.form_table{margin-bottom:15px;font-size:1.1em}.form_table td{padding:5px 10px}input.button{margin:0;padding:2px;border:3px double #999;border-left-color:#ccc;border-top-color:#ccc;background:url(/admin.php?image=button.gif) repeat-x left top;font-size:11px;font-family:Verdana, Arial, Helvetica, sans-serif}input.inputgri,select.inputgri,textarea.inputgri{background:#eee;font-size:14px;border:1px solid #ccc;padding:3px}input.inputgri:focus,select.inputgri:focus,textarea.inputgri:focus{background:#fff;border:1px solid #686868}textarea.inputgri{font-size:12px;font-family:Verdana, Arial, Helvetica, sans-serif;height:60px}.notice{background:#CAEA99;border:1px solid #70A522;padding:15px;margin-bottom:15px;font-size:1.2em;color:#333}.notice_error{background:#FEDCDA;border:1px solid #CE090E;padding:15px;margin-bottom:15px;font-size:1.2em;color:#333}.notice .close,.notice_error .close{float:right;cursor:pointer;color:#fff;background:#74A8F5;padding:2px;margin-right:2px;border:1px outset #ccc}#notice a{color:#333;text-decoration:underline}.other_links{background:#eee;border-top:1px solid #ccc;padding:5px;margin:0 0 15px}#content .other_links h2{color:#999;padding:0 0 0 3px;margin:0}#content .other_links ul li{padding:0 0 0 20px;background:url(/admin.php?image=bullet_grey.gif) no-repeat left center}#content .other_links a,#content .other_links a:visited,#content ul.black li a:hover{color:#999;text-decoration:underline}#content .other_links a:hover{color:#666}code{font-size:1.2em;color:#73A822}#tooltip{width:20em;color:#fff;background:#555;font-size:12px;font-weight:normal;padding:5px;border:3px solid #333;text-align:left}.hr{border-top:2px solid #ccc;margin:5px 0 15px}.bold,#rightheader p span{font-weight:bold}.center{text-align:center}.right{text-align:right}.error-color{color:#CE090E}.ok-color{color:#70A522}.wide-input{width:350px}.small-input{width:50px}.tooltip{padding-bottom:1px;border-bottom:1px dotted #70A522;cursor:help}.ajax-loading{background:url(/admin.php?image=loading.gif)}.bar{background:#73A822;height:10px;font-size:xx-small;padding:2px;color:#000}.comment{padding:5px;border:1px solid #CBD6DE;border-width:1px 0 1px 0;margin-bottom:15px;background:#f6f6f6}#content .comment p,#content .comment ul,#content .other_links ul,form,.checkbox_nomargins,.form_table p,#footer p{margin:0;padding:0}#preload{position:absolute;height:10px;top:-100px}</style>
</head>
<body>
	<div id="wrap">

		<div id="top_content">

			<div id="header">

				<div id="rightheader">
					<p>
						11:01, 18 September 2018
						<br />					</p>
				</div>

				<div id="topheader">
					<h1 id="title">
						<a href="/admin.php">Glype Admin Control Panel</a><br>
						<span>for Web Passport Pro</span>
					</h1>
				</div>

				<div id="navigation">
					<ul>					</ul>
				</div>

			</div>

			<div id="content">

				<h1>Log in</h1>			<p>This is a restricted area for authorised users only. Enter your log in details below.</p>
			<form action="/admin.php?login" method="post">
				<table class="form_table" border="0" cellpadding="0" cellspacing="0">
					<tr>
						<td align="right">Username:</td>
						<td align="left"><input class="inputgri" id="username" name="adminUsername" type="text"></td>
					</tr>
					<tr>
						<td align="right">Password:</td>
						<td align="left"><input class="inputgri" name="adminPassword" type="password"></td>
					</tr>
				</table>
				<p><input class="button" value="Submit &raquo;" name="loginsubmit" type="submit"></p>
			</form>
			</div>

		</div>

		<div id="footer">

			<div id="footer_bg">
				<p><a href="http://www.glype.com/">Glype</a>&reg; &copy; 2007-2015 Glype. All rights reserved.</p>
			</div>

		</div>

	</div>

	<div id="preload">
		<span class="ajax-loading">&nbsp;</span>
	</div>

</body>
</html>