<!DOCTYPE html>

<html>

<head>
<style>
 
     @import url('https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700');

body{
  background: url('http://all4desktop.com/data_images/original/4236532-background-images.jpg');
  font-family: 'Roboto Condensed', sans-serif;
  color: #262626;
  margin: 5% 0;
}
.container{
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}
@media (min-width: 1200px)
{
  .container{
    max-width: 1140px;
  }
}
.d-flex{
  display: flex;
  flex-direction: row;
  background: #f6f6f6;
  border-radius: 0 0 5px 5px;
  padding: 25px;
}
form{
  flex: 4;
}
.Yorder{
  flex: 2;
}
.title{
  background: -webkit-gradient(linear, left top, right bottom, color-stop(0, #5195A8), color-stop(100, #70EAFF));
  background: -moz-linear-gradient(top left, #5195A8 0%, #70EAFF 100%);
  background: -ms-linear-gradient(top left, #5195A8 0%, #70EAFF 100%);
  background: -o-linear-gradient(top left, #5195A8 0%, #70EAFF 100%);
  background: linear-gradient(to bottom right, #5195A8 0%, #70EAFF 100%);
  border-radius:5px 5px 0 0 ;
  padding: 20px;
  color: #f6f6f6;
}
h2{
  margin: 0;
  padding-left: 15px; 
}
.required{
  color: red;
}
label, table{
  display: block;
  margin: 15px;
}
label>span{
  float: left;
  width: 25%;
  margin-top: 12px;
  padding-right: 10px;
}
input[type="text"], input[type="tel"], input[type="email"], select
{
  width: 70%;
  height: 30px;
  padding: 5px 10px;
  margin-bottom: 10px;
  border: 1px solid #dadada;
  color: #888;
}
select{
  width: 72%;
  height: 45px;
  padding: 5px 10px;
  margin-bottom: 10px;
}
.Yorder{
  margin-top: 13px;
  height: 607px;
  padding: 20px;
  border: 2px solid #dadada;
  text-align: center;
}


table{
  margin: 0;
  padding: 0;
}
th{
  border-bottom: 1px solid #dadada;
  padding: 10px 0;
}
tr>td:nth-child(1){
  text-align: left;
  color: #2d2d2a;
}
tr>td:nth-child(2){
  text-align: right;
  color: #52ad9c;
}
td{
  border-bottom: 1px solid #dadada;
  padding: 18px 18px 18px 0;
}


.Yorder>div{
  padding: 1px 0; 
  margin-top:-37px;
}

button{
  width: 100%;
  margin-top: -10px;
  padding: 10px;
  border: none;
  border-radius: 30px;
  background: #52ad9c;
  color: #fff;
  font-size: 15px;
  font-weight: bold;
}
button:hover{
  cursor: pointer;
  background: #428a7d;
}
     
</style>

</head>

<body>
<div class="container">
  <div class="title">
      <h2>Order Items</h2>
  </div>
<div class="d-flex">
  <form action="" method="">
    <label>
      <span class="fname">First Name <span class="required">*</span></span>
      <input type="text" name="fname">
    </label>
    <label>
      <span class="lname">Last Name <span class="required">*</span></span>
      <input type="text" name="lname">
    </label>
    
    <label>
      <span>Country <span class="required">*</span></span>
      <select name="selection">
        <option value="select">Select a country...</option>
        <option value="AFG">Afghanistan</option>
        <option value="ALA">Åland Islands</option>
        <option value="ALB">Albania</option>
        <option value="DZA">Algeria</option>
        <option value="ASM">American Samoa</option>
        <option value="AND">Andorra</option>
        <option value="AGO">Angola</option>
        <option value="AIA">Anguilla</option>
        <option value="ATA">Antarctica</option>
        <option value="ATG">Antigua and Barbuda</option>
        <option value="ARG">Argentina</option>
        <option value="ARM">Armenia</option>
        <option value="ABW">Aruba</option>
        <option value="AUS">Australia</option>
        <option value="AUT">Austria</option>
        <option value="AZE">Azerbaijan</option>
        <option value="BHS">Bahamas</option>
        <option value="BHR">Bahrain</option>
        <option value="BGD">Bangladesh</option>
        <option value="BRB">Barbados</option>
        <option value="BLR">Belarus</option>
        <option value="BEL">Belgium</option>
        <option value="BLZ">Belize</option>
        <option value="BEN">Benin</option>
        <option value="BMU">Bermuda</option>
        <option value="BTN">Bhutan</option>
        <option value="BOL">Bolivia, Plurinational State of</option>
        <option value="BES">Bonaire, Sint Eustatius and Saba</option>
        <option value="BIH">Bosnia and Herzegovina</option>
        <option value="BWA">Botswana</option>
        <option value="BVT">Bouvet Island</option>
        <option value="BRA">Brazil</option>
        <option value="IOT">British Indian Ocean Territory</option>
        <option value="BRN">Brunei Darussalam</option>
        <option value="BGR">Bulgaria</option>
        <option value="BFA">Burkina Faso</option>
        <option value="BDI">Burundi</option>
        <option value="KHM">Cambodia</option>
        <option value="CMR">Cameroon</option>
        <option value="CAN">Canada</option>
        <option value="CPV">Cape Verde</option>
        <option value="CYM">Cayman Islands</option>
        <option value="CAF">Central African Republic</option>
        <option value="TCD">Chad</option>
        <option value="CHL">Chile</option>
        <option value="CHN">China</option>
        <option value="CXR">Christmas Island</option>
        <option value="CCK">Cocos (Keeling) Islands</option>
        <option value="COL">Colombia</option>
        <option value="COM">Comoros</option>
        <option value="COG">Congo</option>
        <option value="COD">Congo, the Democratic Republic of the</option>
        <option value="COK">Cook Islands</option>
        <option value="CRI">Costa Rica</option>
        <option value="CIV">Côte d'Ivoire</option>
        <option value="HRV">Croatia</option>
        <option value="CUB">Cuba</option>
        <option value="CUW">Curaçao</option>
        <option value="CYP">Cyprus</option>
        <option value="CZE">Czech Republic</option>
        <option value="DNK">Denmark</option>
        <option value="DJI">Djibouti</option>
        <option value="DMA">Dominica</option>
        <option value="DOM">Dominican Republic</option>
        <option value="ECU">Ecuador</option>
        <option value="EGY">Egypt</option>
        <option value="SLV">El Salvador</option>
        <option value="GNQ">Equatorial Guinea</option>
        <option value="ERI">Eritrea</option>
        <option value="EST">Estonia</option>
        <option value="ETH">Ethiopia</option>
        <option value="FLK">Falkland Islands (Malvinas)</option>
        <option value="FRO">Faroe Islands</option>
        <option value="FJI">Fiji</option>
        <option value="FIN">Finland</option>
        <option value="FRA">France</option>
        <option value="GUF">French Guiana</option>
        <option value="PYF">French Polynesia</option>
        <option value="ATF">French Southern Territories</option>
        <option value="GAB">Gabon</option>
        <option value="GMB">Gambia</option>
        <option value="GEO">Georgia</option>
        <option value="DEU">Germany</option>
        <option value="GHA">Ghana</option>
        <option value="GIB">Gibraltar</option>
        <option value="GRC">Greece</option>
        <option value="GRL">Greenland</option>
        <option value="GRD">Grenada</option>
        <option value="GLP">Guadeloupe</option>
        <option value="GUM">Guam</option>
        <option value="GTM">Guatemala</option>
        <option value="GGY">Guernsey</option>
        <option value="GIN">Guinea</option>
        <option value="GNB">Guinea-Bissau</option>
        <option value="GUY">Guyana</option>
        <option value="HTI">Haiti</option>
        <option value="HMD">Heard Island and McDonald Islands</option>
        <option value="VAT">Holy See (Vatican City State)</option>
        <option value="HND">Honduras</option>
        <option value="HKG">Hong Kong</option>
        <option value="HUN">Hungary</option>
        <option value="ISL">Iceland</option>
        <option value="IND">India</option>
        <option value="IDN">Indonesia</option>
        <option value="IRN">Iran, Islamic Republic of</option>
        <option value="IRQ">Iraq</option>
        <option value="IRL">Ireland</option>
        <option value="IMN">Isle of Man</option>
        <option value="ISR">Israel</option>
        <option value="ITA">Italy</option>
       
        <option value="SGP">Singapore</option>
        <option value="SXM">Sint Maarten (Dutch part)</option>
        <option value="SVK">Slovakia</option>
        <option value="SVN">Slovenia</option>
        <option value="SLB">Solomon Islands</option>
        <option value="SOM">Somalia</option>
        <option value="ZAF">South Africa</option>
        <option value="SGS">South Georgia and the South Sandwich Islands</option>
        <option value="SSD">South Sudan</option>
        <option value="ESP">Spain</option>
        <option value="LKA">Sri Lanka</option>
        <option value="SDN">Sudan</option>
        <option value="SUR">Suriname</option>
        <option value="SJM">Svalbard and Jan Mayen</option>
        <option value="SWZ">Swaziland</option>
        <option value="SWE">Sweden</option>
        <option value="CHE">Switzerland</option>
        <option value="SYR">Syrian Arab Republic</option>
        <option value="TWN">Taiwan, Province of China</option>
        <option value="TJK">Tajikistan</option>
        <option value="TZA">Tanzania, United Republic of</option>
        <option value="THA">Thailand</option>
        <option value="TLS">Timor-Leste</option>
        <option value="TGO">Togo</option>
        <option value="TKL">Tokelau</option>
        <option value="TON">Tonga</option>
        <option value="TTO">Trinidad and Tobago</option>
        <option value="TUN">Tunisia</option>
        <option value="TUR">Turkey</option>
        <option value="TKM">Turkmenistan</option>
        <option value="TCA">Turks and Caicos Islands</option>
        <option value="TUV">Tuvalu</option>
        <option value="UGA">Uganda</option>
        <option value="UKR">Ukraine</option>
        <option value="ARE">United Arab Emirates</option>
        <option value="GBR">United Kingdom</option>
        <option value="USA">United States</option>
        <option value="UMI">United States Minor Outlying Islands</option>
        <option value="URY">Uruguay</option>
        <option value="UZB">Uzbekistan</option>
        <option value="VUT">Vanuatu</option>
        <option value="VEN">Venezuela, Bolivarian Republic of</option>
        <option value="VNM">Viet Nam</option>
        <option value="VGB">Virgin Islands, British</option>
        <option value="VIR">Virgin Islands, U.S.</option>
        <option value="WLF">Wallis and Futuna</option>
        <option value="ESH">Western Sahara</option>
        <option value="YEM">Yemen</option>
        <option value="ZMB">Zambia</option>
        <option value="ZWE">Zimbabwe</option>
      </select>
    </label>
    <label>
      <span>Street Address <span class="required">*</span></span>
      <input type="text" name="houseadd" placeholder="House number and street name" required>
    </label>
    <label>
      <span>&nbsp;</span>
      <input type="text" name="apartment" placeholder="Apartment, suite, unit etc. (optional)">
    </label>
    <label>
      <span>Town / City <span class="required">*</span></span>
      <input type="text" name="city"> 
    </label>
    <label>
      <span>State / County <span class="required">*</span></span>
      <input type="text" name="city"> 
    </label>
    <label>
      <span>Postcode / ZIP <span class="required">*</span></span>
      <input type="text" name="city"> 
    </label>
    <label>
      <span>Phone <span class="required">*</span></span>
      <input type="tel" name="city"> 
    </label>
    <label>
      <span>Email Address <span class="required">*</span></span>
      <input type="email" name="city"> 
    </label>
  </form>

  <div class="Yorder">
    <img src="egg biriyani.jpeg" class="baby" alt="" width="350" height="250">
    <table>
      <tr>
        <th colspan="2"><h2>Your order</h2></th>
      </tr>
      <tr>
        <td>Dal</td>
        <td>&#8377;160</td>
      </tr>
      <tr>
        <td>total</td>
        <td>&#8377;160</td>
      </tr>
      <tr>
        <td>Shipping</td>
        <td>Free shipping</td>
      </tr>
    </table><br>
	<div>
	<label>
      <span>PaymentMode*<span class="required"></span></span>
      <select name="selection">
        <option value="select">Select a payment mode...</option>
        <option value="Cash On Delivery">Cash On Delivery</option>
        <option value="UPI" disabled>-UPI-</option>
		 <option value="PAYPAL" disabled>PAYPAL</option>
        
      </select>
    </label>
	</div>
   
    <button type="button">Place Order</button>
  </div><!-- Yorder -->
 </div>
</div>
</body>
</html>


