<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title> R & B Restaurant </title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" type="text/css">
    


    <style>
        body{
            background-image: linear-gradient(
      115deg,
      rgba(243, 159, 134, 0.0),
      rgba(249, 217, 118, 0.65)
    ),
    url(./images/gupchup.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
        }
        #output {
    background-color: #c5edf3;
    color: #463c39;
    font-size: 17px;
    padding: 30px 30px;
    width: 40%;
    border: 2px solid #009688;
    font-family: sans-serif;
    line-height: 1.8;
}
#newPublish {
    background-color: #c5edf3;
    color: #463c39;
    font-size: 17px;
    padding: 30px 30px;
    width: 40%;
    border: 2px solid #009688;
    font-family: sans-serif;
    line-height: 1.8;
}
.box {
    background-color: #f7f7f7;
    margin-top: 60px;
    margin-bottom: 50px;
    padding: 40px 60px;
}
#details_info {
    background-color: #f7f7f7;
    color: #463c39;
    font-size: 17px;
    padding: 30px 30px;
    width: 40%;
    border: 1px solid #cccccc;
    font-family: sans-serif;
    line-height: 1.8;
    margin-left: 90px;
}
.box3 {
    margin-top: 80px;
    margin-left: 150px;
    margin-right: 150px;
    margin-bottom: 60px;
    padding: 40px 50px;
    background-color: gainsboro;
}
.box11 {
    margin-top: 80px;
    margin-left: 250px;
    margin-right: 250px;
    margin-bottom: 60px;
    padding: 40px 50px;
    background-color: gainsboro;
    line-height: 2.5;
}
.web_design_box {
    margin-top: 30px;
    margin-left: 350px;
    margin-right: 350px;
    margin-bottom: 60px;
    padding: 40px 50px;
    background-color: #d9edf7;
    box-shadow: 3px 5px 10px #318f86;
}
.hotel_reserve_box {
    margin-top: 30px;
    margin-left: 350px;
    margin-right: 350px;
    margin-bottom: 60px;
    padding: 40px 50px;
    background-color: #c6badc;
    box-shadow: 3px 5px 10px #7527b0;
}
.online_food_delivery_box {
    margin-top: 50px;
    margin-left: 350px;
    margin-right: 350px;
    margin-bottom: 60px;
    padding: 20px 40px;
    background-color: #d4c0b9;
    box-shadow: 3px 5px 10px #714c4a;
}
.result_box {
    margin-top: 15%;
    margin-left: 350px;
    margin-right: 350px;
    margin-bottom: 60px;
    padding: 20px 40px;
    background-color: #d4c0b9;
    box-shadow: 3px 5px 10px #8BC34A;
}
.result_box_text {
    color: #232222;
    font-size: 20px;
    text-align: center;
    padding-top:10px;
}
.result_box_text span {
    color: #614136;
    font-size: 26px;
    text-align: center;
}
    </style>

</head>
<body>
      <div class="online_food_delivery_box animated bounceInDown" id="input_box">
          <h3> Home delivery  </h3><br>
          <form>
              <div class="form-group">
                  <select class="form-control" id="food_item" required>
                      <option value="0"> Select Food Item ... </option>
                      <option value="1"> MATAR PANNIER </option>
                      <option value="2"> CHICKEN LALLIPOP </option>
                      <option value="3"> KOBI BHAJA  </option>
                      <option value="4"> BITTER CHIPS </option>
                      <option value="5"> CHINGUDI </option>
                      <option value="6"> JEERA RICE  </option>
                      <option value="7"> MORTON </option>
                      <option value="8"> NOODLES </option>
                      <option value="9"> SPRINGROLL </option>
                      <option value="10"> EGG BIRIYANI </option>
                     
                  </select>
              </div>
              <div class="form-group">
                  
                    <h4> Want Special Item ? &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      YES &nbsp;<input type="radio"name="yes or no" value=""> &nbsp;&nbsp;
                      NO &nbsp;<input type="radio"name="yes or no" value=""></h4>
                  </select>
              </div>
              <div class="form-group">
                  <input type="number" class="form-control" id="food_quantity" placeholder="Quantity" required="required">
              </div>
              <div class="form-group">
                  <input type="number" class="form-control" id="mobile_number" placeholder="mobile number" required="required">
              </div>
              <div class="form-group">
                  <select class="form-control" id="delivery_type">
                      <option value="0"> Delivery Type - </option>
                      <option value="0"> Normal </option>
                      <option value="2"> Emergency </option>
                  </select>
              </div>
              <div class="form-group">
                  <select class="form-control" id="delivery_area" >
                      <option value="0"> Select Delivery Area ... </option>
                      <option value="1"> Monarch square </option>
                      <option value="2"> MCA department </option>
                      <option value="3"> Kendrapara  </option>
                      <option value="4"> Dipa market  </option>
                      <option value="5"> Ananda market  </option>
                      <option value="6"> Bansadhara hostel  </option>
                      <option value="7"> <b>University gate</b> </option>
                  </select>
              </div><br>
              <div class="form-group">
                  
                  
                  <a href="ORDERNOW.php"><input type="button" value="ORDER NOW" class="btn btn-primary" style="float: center" id="ok"></a>
              </div>
          </form>
      </div>

      
</body>
</html>