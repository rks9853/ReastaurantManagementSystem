<!DOCTYPE html>
<html>
<head>
 

<style>
  
  body  {
  background-image: url("bg1.jpeg");
  background-repeat: no-repeat;
  background-size: 100% 180%;
}


.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.card .card-text{
  color:red;
  font-size:30px;
}

.card button {
 border-radius: 22px;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #3A8F8E;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
    background:  #66E08C;
  opacity: 0.7;
}

 .order {
  
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}



.order button {
  border-radius: 22px;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #3A8F8E;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.order button:hover {
   background:  #66E08C; 
  opacity: 0.7;
}


 

div.food {
   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  position: relative;
  width: 600px;
  height: 450px;
  border: 3px solid #73AD21;
  display: block;
  margin-left: auto;
  margin-right: auto;
} 
 
 .food {
  border-radius: 5px;
}



</style>
</head>
<body>

<div class="food"> <img src="bitter chips.jpeg" width="600" height="450"></div>		

<div class="card">
<div class="card-text">
   <h2>price:Rs.30</h2>
   </div>
<div>
<div class="card">
   
<div>
<a href="mycart.php"><p><button>Add to Cart</button></p></a>
</div>
<div class="order">
   
<a href="bc.php"><p><button>Order Now</button></p></a>
</div>

 
			
			

</body>
</html>