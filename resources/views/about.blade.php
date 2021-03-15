<!DOCTYPE html>
<html>
<head>
<title>About me</title>
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
.main{
position:absolute;
top:110px;
display:flex;
justify-content:center;
}
.dg{
}
h1{
font-size:60px;
	color:white;
	font-family: 'Dancing Script', cursive;
	
}
p{
font-size:30px;
	color:white;
	font-family: 'Dancing Script', cursive;
	
}
.texts{
width:50%;
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

<div class="main">
<div><img src="img/original.jpg" style="width:70%;border:3px solid white;"/></div>
<div class="texts">
<h1>About me</h1>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nisl diam, congue at lorem id, gravida consectetur mi. Etiam sed placerat mi.
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nisl diam, congue at lorem id, gravida consectetur mi. Etiam sed placerat mi.
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nisl diam, congue at lorem id, gravida consectetur mi. Etiam sed placerat mi.
</p>
</div>
</div>

</body>
</html>