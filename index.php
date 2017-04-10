<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	  <meta charset="utf-8">
	  <title>DKA</title>
	<link rel="stylesheet" type="text/css" href="layout.css">
	<script type="text/javascript" src="fancybox/fancybox.js"></script>
	<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.4.css" media="screen" />
    <script type="text/javascript" src="fancybox/video.js"></script>
		<script language="JavaScript1.1">
<!--

//*****************************************
// Blending Image Slide Show Script- 
// � Dynamic Drive (www.dynamicdrive.com)
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
	 <li class="home"><a href="home.php">home</a></li>
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
		
<img src="1slideshow.png" name="slide" border=0 style="filter:blendTrans(duration=3)" width=600 height=310></img>

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

<p align="center"><font face="arial" size="-2">This free script provided by<br>
<a href="http://www.dynamicdrive.com">Dynamic Drive</a></font></p>
</div>
</div>



<div id="videos">
	 <div class="one"><a class="video"  title="The Falltape" href="http://www.youtube.com/v/ZeStnz5c2GI?fs=1&amp;autoplay=1"><img src="videobg.png" width="145" height="85" alt="" border="0">
	 <span class="font">DKA Pawn Ba La Ga</a></span><br><span class="font1">DKA is Developing</span><span class="font1"> Kachin Aliens . . .</span></div>
	 <div class="two"><a class="video"  title="Love and Focus Best of 2008 Skate HD" href="http://www.youtube.com/v/z2xjxZcfrwY?fs=1&amp;autoplay=1"><img src="videobg.png" width="145" height="85" alt="" border="0">
	 <span class="font">DKA Pawn Ba La Ga</a></span><br><span class="font1">DKA is Developing</span><span class="font1"> Kachin Aliens . . .</span></div>
	 <div class="three"><a class="video"  title="The Barn" href="http://www.youtube.com/v/4tS88S6em8Y?fs=1&amp;autoplay=1"><img src="videobg.png" width="145" height="85" alt="" border="0">
	 <span class="font">DKA Pawn Ba La Ga</a></span><br><span class="font1">DKA is Developing</span><span class="font1"> Kachin Aliens . . .</span></div>
	 <div class="four"><a class="video"  title="Jose Rojo - Commercial" href="http://www.youtube.com/v/R7vq0-r9WSc?fs=1&amp;autoplay=1"><img src="videobg.png" width="145" height="85" alt="" border="0">
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
				 <li><a href="home.php">Home</a></li>
				 <li><a href="gallery.php">Gallery</a></li>
				 <li><a href="music.php">Music</a></li>
				 <li><a href="contact.php">Contact</a></li>
				 <li><a href="about.php">About</a></li>
				 <li><a href="albums.php">Albums</a></li>
				 <li><a href="">KCS</a></li>
				 <li><a href="videos.php">Videos</a></li>
				 <li><a href="news.php">News</a></li>
				 <li><a href="links.php">Links</a></li>
				 </ul>
<div class="eight"><a href="blog.php">Blog</a></div>
<div class="leftbox">Copyright @ 2011:<a href="#">DKA(Developing Kachin Aliens)</a></div>
<div class="rightbox">Powered by <a href="#">Ah Zau</a></div>
</div>




</body>
</html>
