<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/main.css" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }

        .login_index{
            text-align: center;
            justify-content: center;
            align-items: center;
            background-color: #4a69bd;
            color: #dfe4ea;
            padding: 50px;
        }


        .container-fluid{
            background-color: #4a69bd;
            color: coral;
        }

        .sub_btn{
            margin: 30px;
            display: inline-block;
            border-radius: 5%;          
            font-size: 12pt;
            font-family: sans-serif;      
            text-align: center;      
            cursor: pointer;
            padding: 8px 8px;
            background: #000066;
            color: #ffffff;
            line-height: 1em;
            transition: .3s;
            box-shadow: 6px 6px 3px #666666;
            border: 2px solid #000066;
        }
        .sub_btn:hover {
            box-shadow: none;
            color: #000066;
            background: #ffffff;
        }
    </style>
    <title>ログイン</title>
</head>

<body>

    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">メインページへ</a>
                </div>
            </div>
        </nav>
    </header>
    <form name="form1" action="login_act.php" method="post" class="login_index">
        ID:<br><input type="text" name="lid"><br>

        PW:<br><input type="password" name="lpw"><br>
        <input type="submit" value="ログイン" class="sub_btn">
    </form>

</body>

</html>
