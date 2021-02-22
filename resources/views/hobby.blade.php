<!DOCTYPE html>
<html>
<head>
<title>My hobbies</title>
<link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Dancing+Script:wght@500;700&family=Karla:wght@700&family=Lexend+Peta&family=Lobster&family=Mukta:wght@600&family=Tajawal&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>

</head>
<body>
<style>
html,body{
	margin:0;
	padding:0;
	width:100%;
	overflow-x:hidden;
}
.header{
	width:100%;
}

.headi{
	position:absolute;
	top:0;
	display:flex;
	justify-content:space-around;
	width:100%;
		background:black;
	padding:22px;
	text-align:center;
}
em{
	border-bottom:3px solid red;
}
.head-item{
	font-size:30px;
	color:white;
	text-align:center;
	transition:0.5s all;
	border-bottom:3px solid red;
}
.head-item:hover{
	border:3px solid white;
	cursor:pointer;
}
h1{
font-size:60px;
	color:white;
	font-family: 'Dancing Script', cursive;
	
}
.main{
position:absolute;
top:50px;
width:100%;
text:center;

}
.ins{
display:flex;
justify-content:center;
text-align:center;
width:100%;
}
.inside{
text-align:center;
width:100%;
}
</style>

<div class="header">
<div data-aos="slide-down"><div><img src="img/dark.jpg" style="width:100%;height:105vh;border-bottom:3px solid white;"/></div></div>
<div class="headi">
<a href="#"><div data-aos="slide-up"><div class="head-item" onclick="window.location.reload();">MAIN</div></div></a>
<a href="{{route('about_me')}}"><div data-aos="slide-up"><div class="head-item" id="ame">ABOUT ME</div></div></a>
<a href="{{route('contact_me')}}"><div data-aos="slide-up"><div class="head-item" id="con">CONTACT</div></div></a>
<a href="{{route('hobby')}}"><div data-aos="slide-up"><div class="head-item" id="hob">HOBBY</div></div></a>
</div>
</div>

<div class="main">
<div class="inside"><h1>Hobbies</h1></div>
<div class="ins">
<div><img src="img/dan.jpg" style="width:60%;border:3px solid white;"/></div>
<div><img src="img/EPD1ssLX0AIOfFG.jpg" style="width:80%;border:3px solid white;"/></div>
</div>
</div>


</body>
</html>