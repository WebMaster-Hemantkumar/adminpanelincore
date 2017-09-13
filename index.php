<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>pk</title>
        <style>
            body{
                border: 2px solid black;
                background: black;
            }
            *{margin: 0;padding: 0}
    .wrap{background: gray;width: 960px;margin: auto}
    .header{
                background: blue;color: red;
            }
    .nav{
                background: bisque;
                
            }
            .header h3{
                text-align: center;
                font-size: 22px;
            }
   .clear{
                clear: both;
            }
   .nav ul{
                list-style: none;
                float: right;
            }
   .nav ul li{
                float: left;
                padding: 6px;
            }
   .nav ul li a{
        text-decoration: none;
        font-size: 18px;
	line-height: 18px;
	font-weight: bold;
  
            }
            .container{
                background: ghostwhite;
            }
            .footer p{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="wrap">
            <div class="header">
                <h3>Student Regester</h3>
            </div>
            <div class="nav">
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="view.php">View</a>
                    </li>
                                    </ul>
                <div class="clear"></div>
            </div>
           <?php require_once 'addnew.php'; ?>
            <div class="footer">
                <p>@copright 2017</p>
            </div>
        </div>
    </body>
</html>
