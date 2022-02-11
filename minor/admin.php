<!DOCTYPE html>
<html>
 
<head>
    
    <title>Admin Login Page</title>
	
	<style>
	
	
	
	.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}
 img.avatar {
  width: 10%;
  border-radius: 50%;
}
	    body {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background: url() no-repeat;
    background-size: cover;
	background-color:#c99b2e;
}
 
.login-box {
    width: 280px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #191970;
}
 
.login-box h1 {
    float: left;
    font-size: 40px;
    border-bottom: 4px solid #191970;
    margin-bottom: 50px;
    padding: 13px;
}
 
.textbox {
    width: 100%;
    overflow: hidden;
    font-size: 20px;
    padding: 8px 0;
    margin: 8px 0;
    border-bottom: 1px solid #191970;
}
 
.fa {
    width: px;
    float: left;
    text-align: center;
}
 
.textbox input {
    border: none;
    outline: none;
    background: none;
    font-size: 18px;
    float: left;
    margin: 0 10px;
}
 
.button {
    width: 100%;
    padding: 8px;
    color: #ffffff;
    background: none #191970;
    border: none;
    border-radius: 6px;
    font-size: 18px;
    cursor: pointer;
    margin: 12px 0;
}

    .button:hover {
   background:  #2aaede; 
  opacity: 0.7;
}
	</style>
	
</head>
 
<body>

    <div class="imgcontainer">
    <img src="admin.jpg" alt="Avatar" class="avatar">
  </div>
       
        <div class="login-box">
            <h1>Admin Login</h1>
 
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="Admin ID"
                         name="adminname" value="">
            </div>
 
            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="Password"
                         name="password" value="">
            </div>
 
            <input class="button" type="submit"
                     name="login" value="Log In">
        </div>
    </form>
</body>
 
</html>