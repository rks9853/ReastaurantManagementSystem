<!DOCTYPE html>
<!--Code by Divinector - divinectorweb.com-->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>R & B Restaurant</title>
	<link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@700&display=swap" rel="stylesheet">
	<style>

html {
  height:100%;
}

body {
  margin:0;
}

.bg {
  animation:slide 3s ease-in-out infinite alternate;
  background-image: linear-gradient(-60deg, #6c3 50%, #09f 50%);
  bottom:0;
  left:-50%;
  opacity:.5;
  position:fixed;
  right:-50%;
  top:0;
  z-index:-1;
}

.bg2 {
  animation-direction:alternate-reverse;
  animation-duration:4s;
}

.bg3 {
  animation-duration:5s;
}

.content {
  background-color:rgba(255,255,255,.1);
  border-radius:.25em;
  box-shadow:0 0 .25em rgba(0,0,0,.25);
  box-sizing:border-box;
  left:50%;
  padding:1vmin;
  position:fixed;
  text-align:center;
  top:50%;
  transform:translate(-50%, -50%);
}

h1 {
  font-family:bold;
  font-size:70px;
}

@keyframes slide {
  0% {
    transform:translateX(-25%);
  }
  100% {
    transform:translateX(25%);
  }
}

.btn {
	color: #fff;
	text-shadow: 2px 2px 2px rgba(0, 0, 0, 1);
	border-radius: 5px;
	position:absolute;
	font-size:22px;
	top:69%;
	margin-left:48%;
	width:100px;
	height:50px;
	font-family: "Montserrat";
	padding:2px;
	font-weight: 500;
	
	background-color: #a28f9d;	
	background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgba(255, 255, 255, 0.6)), color-stop(0.49, rgba(255, 255, 255, 0.3)), color-stop(0.51, rgba(255, 255, 255, 0.0)), to(rgba(255, 255, 255, 0.2))); /* Chrome,Safari4+ */
    background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.6) 0%, rgba(255, 255, 255, 0.3) 50%, rgba(255, 255, 255, 0.0) 51%, rgba(255, 255, 255, 0.2) 100%); /* Chrome10+,Safari5.1+ */
    background-image: -moz-linear-gradient(top, rgba(255, 255, 255, 0.6) 0%, rgba(255, 255, 255, 0.3) 50%, rgba(255, 255, 255, 0.0) 51%, rgba(255, 255, 255, 0.2) 100%); /* FF3.6+ */
    background-image: -o-linear-gradient(top, rgba(255, 255, 255, 0.6) 0%, rgba(255, 255, 255, 0.3) 50%, rgba(255, 255, 255, 0.0) 51%, rgba(255, 255, 255, 0.2) 100%); /* Opera11.10+ */
    background-image: linear-gradient(top, rgba(255, 255, 255, 0.6) 0%, rgba(255, 255, 255, 0.3) 50%, rgba(255, 255, 255, 0.0) 51%, rgba(255, 255, 255, 0.2) 100%); /* W3C */	
}

.btn:hover {
	background-color: #84a98c;	
}
        </style>

</head>
<body>
<form>
 <input type="button" class="btn" value="Go back!" onclick="history.back()">
</form>
<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>
<div class="content">
  <h1>Please 1st Login 2 ur Account <br> Then u can  Get Our Services</h1>
</div>
</div>
</body>
</html>