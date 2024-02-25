<html>
<body style="	
margin: 0;
padding: 0;
display: flex;
justify-content: center;
align-items: center;
min-height: 100vh;
font-family: 'Jost', sans-serif;
background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);">
 <div class="main" style="width: 350px;
        height: 500px;
        background: #1dbab4;
        overflow: hidden;
        border-radius: 10px;
        box-shadow: 5px 20px 50px #000;">  	
            
            <div class="login" style="position: relative;
                width:100%;
                height: 100%;">
<form method="POST" action="login2.php">
<label style="color: #fff;
                        font-size: 2.3em;
                        justify-content: center;
                        display: flex;
                        margin: 60px;
                        font-weight: bold;
                        cursor: pointer;
                        transition: .5s ease-in-out;" for="chk" aria-hidden="true">Log In</label>

<input style="width: 60%;
                        height: 20px;
                        background: #e0dede;
                        justify-content: center;
                        display: flex;
                        margin: 20px auto;
                        padding: 10px;
                        border: none;
                        outline: none;
                        border-radius: 5px;" type="text" name="a" placeholder="User name" required="">
                        <input style="width: 60%;
                        height: 20px;
                        background: #e0dede;
                        justify-content: center;
                        display: flex;
                        margin: 20px auto;
                        padding: 10px;
                        border: none;
                        outline: none;
                        border-radius: 5px;" type="password" name="b" placeholder="password" required="">
<input style="width: 60%;
	height: 40px;
	margin: 10px auto;
	justify-content: center;
	display: block;
	color: #fff;
	background: #573b8a;
	font-size: 1em;
	font-weight: bold;
	margin-top: 20px;
	outline: none;
	border: none;
	border-radius: 5px;
	transition: .2s ease-in;
	cursor: pointer;" type="submit" value="Log in">
</form>
<br> <br>
<centre>
new user?    
<a href='form.php'>create new account</a>
</centre>
</div>
</div>
</body>
</html>
