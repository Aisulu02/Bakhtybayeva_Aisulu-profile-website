<!DOCTYPE html>
<html>
<head>
<title>Contact me</title>
<link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Dancing+Script:wght@500;700&family=Karla:wght@700&family=Lexend+Peta&family=Lobster&family=Mukta:wght@600&family=Tajawal&display=swap" rel="stylesheet">
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
.ctc{
display:flex;
justify-content:center;
position:absolute;
top:80px;
text-align:center;
width:100%;
}
h1{
font-size:60px;
	color:white;
	font-family: 'Dancing Script', cursive;
	
}
.main{
margin:20px;
width:50%;
}
input{
width:70%;
margin:10px;
padding:11px;
}
#im{
border:3px solid white;
}
button{
padding:10px;
font-size:30px;

	font-family: 'Dancing Script', cursive;
	
}
</style>

<div class="header">
<div data-aos="slide-down"><div><img src="img/dark.jpg" style="width:100%;height:105vh;border-bottom:3px solid white;"/></div></div>
<div class="headi">
<a href="#"><div data-aos="slide-up"><div class="head-item" onclick="window.location.reload();">MAIN</div></div></a>
<a href="{{route('about')}}"><div data-aos="slide-up"><div class="head-item" id="ame">ABOUT ME</div></div></a>
<a href="{{route('contact')}}"><div data-aos="slide-up"><div class="head-item" id="con">CONTACT</div></div></a>
<a href="{{route('hobby')}}"><div data-aos="slide-up"><div class="head-item" id="hob">HOBBY</div></div></a>
</div>
</div>

<div class="ctc">
<div class="main" id="contact">
<div class="inside"><div data-aos="slide-up"><h1 class="abme">Contact</h1></div></div>
<div class="footer">
<div data-aos="fade-up-right"><input type="text" placeholder="First name"/></br></div>
<div data-aos="fade-up-left"><input type="text" placeholder="Last Name"/></br></div>
<div data-aos="fade-up-left"><input type="text" placeholder="Mobile Number"/></br></div>
<div data-aos="fade-up-right"><input type="text" placeholder="Text me" id="textme"/></br></div>
<button id="send">SEND</button>
</div>
</div>

<div>
<img src="img/cont.jpg" id="im"/>
</div>

</div>
</body>
</html>