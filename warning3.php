<!DOCTYPE html>
<!--Code by Divinector - divinectorweb.com-->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>R & B Restaurant</title>
	<link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@700&display=swap" rel="stylesheet">
	<style>
        body {
	background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
	background-size: 400% 400%;
	animation: gradient 3s ease infinite;
}
h1{
    margin-left:40%;
    margin-top:20%;

}

@keyframes gradient {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}

.btn {
	color: #fff;
	text-shadow: 2px 2px 2px rgba(0, 0, 0, 1);
	border-radius: 5px;
	position:absolute;
	font-size:22px;
	top:56%;
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
	
		

        <h1 class="text-light">1st login into ur account <br>then u can add items to cart</h1>

		<form>
 <input type="button" class="btn" value="Go back!" onclick="history.back()">
</form>
	
</body>
</html>