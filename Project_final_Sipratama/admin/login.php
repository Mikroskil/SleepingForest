     <html>
    <head>
    <title>Login</title>
<style type="text/css">
	body {
		background:#989898;
	}
	p{
		margin : 0;
	}
	.adminContent{
		background:#333;
		width: 250px;
		margin: 0 auto;
		margin-top: 150px;
		padding: 20px;
		border-radius: 8px;
		border: 5px solid rgba(0,0,0,0,5);
		
		
		
	}
	.adminContent input{
		width: 236px;
		padding: 7px 5px;
		margin-bottom: 15px;
		border-radius: 6px;
		box-shadow: 0px 1px 2px rgba(255,255,0,6);
	}
	.header{
		width: 100px;
		padding: 7px 5px;
		margin-top: 15px;
		border-radius: 6px;
		
	}
	</style>
    </head>
    <body>
    	<div class="header">
    	<h3></h3>
    	</div>
   
    <div class="adminContent">
    <form method="POST" action="cek_login.php">
    	
  
   <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" value="Login">
   </a>
    
    </form>
    </div>
    
    
    </body>
    </html>