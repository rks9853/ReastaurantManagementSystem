<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
 background-color:#75E3B6;
  font-family: Arial, Helvetica, sans-serif;
}

.name{
      text-align: center;
	   text-decoration: underline overline wavy blue;
}



.flip-box {
  margin:auto;
  margin-top:20px;
  background-color: transparent;
  width: 300px;
  border: 1px solid #f1f1f1;
  height: 200px;
  perspective: 1000px;
  
  
  
}

.flip-box-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
  
}

.flip-box:hover .flip-box-inner {
  transform: rotateY(180deg);
}

.flip-box-front, .flip-box-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  
}

.flip-box-front {
  background-color: #bbb;
  color: black;
  
}

.flip-box-back {
  background-color:	#d98cb3;
  color:#400080;
  transform: rotateY(180deg);
 
}









.flip-box2 {
  margin-top:-648px;
  margin-bottom:668px;
  margin-left:410px;
  margin-right:0px;
  background-color: transparent;
  width: 300px;
  border: 1px solid #f1f1f1;
  height: 200px;
  perspective: 1000px;
  
  
  
}

.flip-box-inner2 {
  position: relative;

  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
  
}

.flip-box2:hover .flip-box-inner2 {
  transform: rotateY(180deg);
}

.flip-box-front2, .flip-box-back2 {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  
}

.flip-box-front2 {
  background-color: #bbb;
  color: black;
  
}

.flip-box-back2 {
  background-color:	#d98cb3;
  color:#400080;
  transform: rotateY(180deg);
 
}









.flip-box3 {
  margin-top:-1317px;
  margin-bottom:1337px;
  margin-left:1070px;
  margin-right:0px;
  background-color: transparent;
  width: 300px;
  border: 1px solid #f1f1f1;
  height: 200px;
  perspective: 1000px;
  
  
  
}

.flip-box-inner3 {
  position: relative;

  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
  
}

.flip-box3:hover .flip-box-inner3 {
  transform: rotateY(180deg);
}

.flip-box-front3, .flip-box-back3 {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  
}

.flip-box-front3 {
  background-color: #bbb;
  color: black;
  
}

.flip-box-back3 {
  background-color:	#d98cb3;
  color:#400080;
  transform: rotateY(180deg);
 
}

</style>
</head>
<body>

<div class="name">
<h1>VEG ITEMS</h1>
  </div>


<div class="flip-box">
  <div class="flip-box-inner">
    <a href="warning1.php"><div class="flip-box-front">
     <img src="./images/jeera rice.jpeg"  width="300" height="200">
    </div>
    <div class="flip-box-back">
      <h2>Name : Jeera Rice</p>Price : Rs.40/- </p>  </h2>
	           
    </div></a>
  </div>
</div>

<div class="flip-box">
  <div class="flip-box-inner">
  <a href="warning1.php"><div class="flip-box-front">
     <img src="./images/dal.jpeg"  width="300" height="200">
    </div>
    <div class="flip-box-back">
      <h2>Name : Dal</p>Price : Rs.50/- </p>  </h2>
	           
    </div></a>
  </div>
</div>

<div class="flip-box">
  <div class="flip-box-inner">
  <a href="warning1.php"><div class="flip-box-front">
     <img src="./images/matar.jpeg"  width="300" height="200">
    </div>
    <div class="flip-box-back">
      <h2>Name : Matar Pannier</p>Price : Rs.140/- </p>  </h2>
	           
    </div></a>
  </div>
</div>







<div class="flip-box2">
  <div class="flip-box-inner2">
  <a href="warning1.php"><div class="flip-box-front2">
     <img src="./images/pannier finger.jpeg"  width="300" height="200">
    </div>
    <div class="flip-box-back2">
      <h2>Name : Pannier Finger</p>Price : Rs.120/- </p>  </h2>
	           
    </div></a>
  </div>
</div>

<div class="flip-box2">
  <div class="flip-box-inner2">
  <a href="warning1.php"><div class="flip-box-front2">
     <img src="./images/bitter chips.jpeg"  width="300" height="200">
    </div>
    <div class="flip-box-back2">
      <h2>Name : Bitter Chips</p>Price : Rs.30/- </p>  </h2>
	           
    </div></a>
  </div>
</div>

<div class="flip-box2">
  <div class="flip-box-inner2">
  <a href="warning1.php"><div class="flip-box-front2">
     <img src="./images/allo kobi bhaja.jpeg"  width="300" height="200">
    </div>
    <div class="flip-box-back2">
      <h2>Name :Allo Kobi Bhaja</p>Price : Rs.40/- </p>  </h2>
	           
    </div></a>
  </div>
</div>












<div class="flip-box3">
  <div class="flip-box-inner3">
  <a href="warning1.php"><div class="flip-box-front3">
     <img src="./images/noodles.jpeg"  width="300" height="200">
    </div>
    <div class="flip-box-back3">
      <h2>Name : Noodles</p>Price : Rs.70/- </p>  </h2>
	           
    </div></a>
  </div>
</div>

<div class="flip-box3">
<div class="flip-box-inner3">
  <a href="warning1.php"><div class="flip-box-front3">
     <img src="./images/pannier salad.jpg"  width="300" height="200">
    </div>
    <div class="flip-box-back3">
      <h2>Name :Pannier Salad </p>Price : Rs.110/- </p>  </h2>
	           
    </div></a>
  </div>
</div>

<div class="flip-box3">
  <div class="flip-box-inner3">
  <a href="warning1.php"><div class="flip-box-front3">
    <img src="./images/bhindi masala.jpeg"  width="300" height="200">
    </div>
    <div class="flip-box-back3">
      <h2>Name :Bhindi Masala</p>Price : Rs.80/- </p>  </h2>
	           
    </div></a>
  </div>
</div>









</body>
</html>