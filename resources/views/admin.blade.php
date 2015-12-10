<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

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
                font-size: 48px;
                
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <form class="form-horizontal" role="form" method="POST" action="/add">
                <div class="title">Good Day Commander. What are we going to do?</div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">  
                <input type="submit" name="submit" value="Add Teacher Account" class="btn btn-primary">
                <input type="submit" name="submit" value="View Teacher List" class="btn btn-primary">
            </div>
        </div>
    </body>
</html>
