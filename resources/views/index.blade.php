<!DOCTYPE html>
<html>
<head>
<title>
Aisulu
</title>
<link rel="stylesheet" type="text/css" href="Portfolio.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Dancing+Script:wght@500;700&family=Karla:wght@700&family=Lexend+Peta&family=Lobster&family=Mukta:wght@600&family=Tajawal&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>
</head>
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
<body>

<div class="header">
<div data-aos="slide-down"><div><img src="img/dark.jpg" style="width:100%;height:105vh;border-bottom:3px solid white;"/></div></div>
<div class="headi">
<a href="#"><div data-aos="slide-up"><div class="head-item" onclick="window.location.reload();">MAIN</div></div></a>
<a href="{{route('about')}}"><div data-aos="slide-up"><div class="head-item" id="ame">ABOUT ME</div></div></a>
<a href="{{route('contact')}}"><div data-aos="slide-up"><div class="head-item" id="con">CONTACT</div></div></a>
<a href="{{route('hobby')}}"><div data-aos="slide-up"><div class="head-item" id="hob">HOBBY</div></div></a>
</div>
<div class="name"><div data-aos="slide-up"><h1 class="myname">Hello! Welcome to <em>Aisulu Bakhtybayeva's</em> page</h1></div>
<div data-aos="flip-right"><button class="see">SEE</button></div>
</div>
</div>

</div>


<script src="Portfolio.js"></script>
 <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>
