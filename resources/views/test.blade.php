<html>
<head>
    <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
                
            }
        </style>

<body>



<html>
<h1>Login</h1>
<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

<title>PUNYETA </title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<br>	
<div class="body">
 

   <form class="form-horizontal" role="form" method="POST" action="/admin">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">  

    USERNAME: <input type="text" name="username" class="form"/>
    <br>
    <br>
    PASSWORD: <input type="password" name="password" class="form"/>
    <br>
    <br>
   
</div>
 
 <input type="submit" name="submit" value="Log Me In" class="btn btn-primary">
</form>
</html>



</body>
</head>
</html>