<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	  <meta charset="utf-8">
	  <title>DKA</title>
	<link rel="stylesheet" type="text/css" href="layout.css">
		<script language="JavaScript1.1">
<!--

//*****************************************
// Blending Image Slide Show Script- 
// © Dynamic Drive (www.dynamicdrive.com)
// For full source code, visit http://www.dynamicdrive.com/
//*****************************************

//specify interval between slide (in mili seconds)
var slidespeed=3000

//specify images
var slideimages=new Array("1slideshow.png","slideshow.png","1slideshow.png")

//specify corresponding links
var slidelinks=new Array("http://www.dynamicdrive.com","http://javascriptkit.com","http://www.geocities.com")

var newwindow=1 //open links in new window? 1=yes, 0=no

var imageholder=new Array()
var ie=document.all
for (i=0;i<slideimages.length;i++){
imageholder[i]=new Image()
imageholder[i].src=slideimages[i]
}

function gotoshow(){
if (newwindow)
window.open(slidelinks[whichlink])
else
window.location=slidelinks[whichlink]
}

//-->
</script>

	<style type="text/css">
	.font {text-decoration: none;color:#31eefd; font-style: bold; font-family: "Times New Roman", Times, Serif; font-size:15px; margin:0px 0px;}
	.font1 {color:#c1bbf3; font-style: bold; font-family: "Times New Roman", Times, Serif; font-size:12px; margin:0px 0px;}
	
	.font2 {color:#00ffff; font-family:"Times New Roman", Times, Serif; font-size:20px;  margin:0px 30px;}
	.font3 {color:#00ffff; font-style: italic; font-family: "Times New Roman", Times, Serif; font-size:15px; margin:0px 0px;}
	.font4 {color:#9999ff; font-style: ; font-family: "Times New Roman", Times, Serif; font-size:10px; margin:0px 0px;}
	.font5 {color:#c1bbf3; font-style: ; font-family: "Times New Roman", Times, Serif; font-size:15px; margin:0px 0px;}
	.font33 {color:#dbdade; font-style: italic; font-family: "Times New Roman", Times, Serif; font-size:20px; margin:0px 0px;}
	.font34 {color:#dbdade; font-style: italic; font-family: "Times New Roman", Times, Serif; font-size:20px; margin:0px 0px;}
	
	
	.bottom a {margin:0px -10px;display:block; text-decoration:none;overflow:hidden;background-image: url(dkaplan.png); width:180px; height:32px; border:px solid #797979; text-indent:-9999px;background-repeat:no repeat;}
	.bottom a:hover{margin:0px -10px;display:block; text-decoration:none;overflow:hidden;background-image: url(dkaplan11.png); width:180px; height:32px; border:px solid #797979; text-indent:-9999px;background-repeat:no repeat;}
	
	</style>
	
</head>




<body>
<div id="logo">
<div class="headlogo">
</div>
<div class="menubgup">
</div>

	 <ul id="menucontainer">
	 <li class="home"><a href="home.php" class="selected">home</a></li>
	 <li class="gallery"><a href="gallery.php">gallery</a></li>
	 <li class="music"><a href="music.php">music</a></li>
	 <li class="contact"><a href="contact.php">contact</a></li>
	 <li class="about"><a href="about.php">about</a></li>
	 </ul>
	 
<div class="menubgdown">
</div>
</div>



<div id="content">
	 <div id="slideshow">
	 
	 	  <div class="DKAlogotext"></div>
		  <div class="#"></div>
	 	  <div class="contentslideshow">
		
<a href="javascript:gotoshow()"><img src="1slideshow.png" name="slide" border=0 style="filter:blendTrans(duration=3)" width=600 height=310></a>

<script language="JavaScript1.1">
<!--
var whichlink=0
var whichimage=0
var blenddelay=(ie)? document.images.slide.filters[0].duration*1000 : 0
function slideit(){
if (!document.images) return
if (ie) document.images.slide.filters[0].apply()
document.images.slide.src=imageholder[whichimage].src
if (ie) document.images.slide.filters[0].play()
whichlink=whichimage
whichimage=(whichimage<slideimages.length-1)? whichimage+1 : 0
setTimeout("slideit()",slidespeed+blenddelay)
}
slideit()

//-->
</script>

</div>
</div>



<div id="videos">
	 <div class="one"><a href="#" target="blank"><img src="videobg.png" width="145" height="85" alt="" border="0">
	 <span class="font">DKA Pawn Ba La Ga</a></span><br><span class="font1">DKA is Developing</span><span class="font1"> Kachin Aliens . . .</span></div>
	 <div class="two"><a href="#" target="blank"><img src="videobg.png" width="145" height="85" alt="" border="0">
	 <span class="font">DKA Pawn Ba La Ga</a></span><br><span class="font1">DKA is Developing</span><span class="font1"> Kachin Aliens . . .</span></div>
	 <div class="three"><a href="#" target="blank"><img src="videobg.png" width="145" height="85" alt="" border="0">
	 <span class="font">DKA Pawn Ba La Ga</a></span><br><span class="font1">DKA is Developing</span><span class="font1"> Kachin Aliens . . .</span></div>
	 <div class="four"><a href="#" target="blank"><img src="videobg.png" width="145" height="85" alt="" border="0">
	 <span class="font">DKA Pawn Ba La Ga</a></span><br><span class="font1">DKA is Developing</span><span class="font1"> Kachin Aliens . . .</span></div>
</div>



	 <ul id="divider">
	 <li class="DKA"><a href="#">DKA</a></li>
	 <li class="RWin"><a href="http://www.youtube.com/results?search_query=rebecca+win+&aq=f" target="blank">R Win</a></li>
	 <li class="AhBaDi"><a href="http://www.youtube.com/results?search_query=ah+ba+di&aq=f" target="blank">Ah Ba Di</a></li>
	 <li class="AuraLi"><a href="http://www.youtube.com/results?search_query=aura+li&aq=f" target="blank">Aura Li</a></li>
	 <li class="PNA"><a href="http://www.youtube.com/watch?v=1RtLbhLf_eg&feature=related" target="blank">P N A</a></li>
	 <li class="MSN"><a href="http://www.youtube.com/watch?v=ZjBAY7rOcVU" target="blank">M S N</a></li>
	 <li class="NawNaw"><a href="http://www.youtube.com/watch?v=JkzhoC8ubKw" target="blank">Naw Naw</a></li>
	 <li class="Plus3"><a href="http://www.youtube.com/watch?v=DsLm9LrqtvA" target="blank">Plus 3</a></li>
	 <li class="GTingluk"><a href="http://www.youtube.com/watch?v=D7_lL1Y82So" target="blank">G Tingluk</a></li>
	 <li class="HGun"><a href="http://www.youtube.com/watch?v=UK47qK9zULw&feature=related" target="blank">H Gun</a></li>
	 </ul>




<div id="blog">
<div class="bloginside">
<span class="font2">. . DKA Blog . .<br><br></span>
<span class="font3">DKA CD Album<br></span>
<span class="font4">Tuesday, 10 August 2010 </span><br>
<span class="font5">I have been working hard to build this website.I have been working hard to build this website... </span>
<br>
<div class="bottom"><a href="blog.php" >bottom</a></div>

<span class="font3">DKA CD Album<br></span>
<span class="font4">Tuesday, 10 August 2010 </span><br>
<span class="font5">I have been working hard to build this website.I have been working hard to build this website... </span>
<br>
<div class="bottom"><a href="blog.php" >bottom</a></div>


<span class="font3">DKA CD Album<br></span>
<span class="font4">Tuesday, 10 August 2010 </span><br>
<span class="font5">Ihave been working hard to build this website.I have been working hard to build this website... </span>
<br>
<div class="bottom"><a href="blog.php" >bottom</a></div>

</div>
</div>
</div>



<div id="bottom">
	 			 <ul>
				 <li><a href="#">Home</a></li>
				 <li><a href="#">Gallery</a></li>
				 <li><a href="#">Music</a></li>
				 <li><a href="#">Contact</a></li>
				 <li><a href="#">About</a></li>
				 <li><a href="#">Album</a></li>
				 <li><a href="#">KCS</a></li>
				 <li><a href="#">BS Studio</a></li>
				 <li><a href="#">Videos</a></li>
				 <li><a href="#">News</a></li>
				 <li><a href="#">Links</a></li>
				 </ul>
<div class="eight"><a href="#">Blog</a></div>
<div class="leftbox">Copyright @ 2011:<a href="#">DKA(Developing Kachin Aliens)</a></div>
<div class="rightbox">Powered by <a href="#">Ah Zau</a></div>
</div>




</body>
</html>
