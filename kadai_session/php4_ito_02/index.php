<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>User form</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }

        .navbar navbar-default{
            background-color: #4a69bd;
        }
        .container-fluid{
            background-color: #4a69bd;
            color: coral;
        }

        .jumbotron{
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #4a69bd;
            color: #dfe4ea;
        }

        .form_head{
            font-weight: bold;
            color: #dfe4ea;
        }

        .m_box{
            color: black;
        }

        .sub_btn{
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

        .res_btn{
            display: inline-block;
            border-radius: 5%;          
            font-size: 12pt;
            font-family: sans-serif;      
            text-align: center;      
            cursor: pointer;
            padding: 8px 8px;
            background: #e55039;
            color: #ffffff;
            line-height: 1em;
            transition: .3s;
            box-shadow: 6px 6px 3px #666666;
            border: 2px solid #e55039;
        }
        .res_btn:hover {
            box-shadow: none;
            color: #e55039;
            background: #ffffff;
        }

    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">???????????????????????????</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="login.php">????????????</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="logout.php">???????????????</a></div>
            </div>
        </nav>
    </header>

    <form method="POST" action="insert.php">
        <div class="jumbotron">
            <fieldset>
                <legend class="form_head">??????????????????????????????</legend>
                <label>?????????<br>
                    <input type="text" name="name"></label><br>
                <label>?????????<br>
                    <input type="text" name="age"></label><br>
                <label>?????????<br>
                    <input type="radio" name="gender" value="male">??????
                    <input type="radio" name="gender" value="female">??????</label><br>
                <label>????????????????????????<br>
                    <input type="text" name="email"></label><br>
                <label>URL???????????????<br>
                    <input type="text" name="url" value="https://" size="45" /></label><br>
                <label>??????????????????<br>
                    <textArea name="message" rows="5" cols="50" placeholder="?????????????????????????????????" class="m_box"></textArea></label><br>
                <input type="submit" value="??????" class="sub_btn">
                <input type="reset" value="??????" class="res_btn">
            </fieldset>
        </div>
    </form>

    <script src="https://embed.small.chat/T027T02RUKTC02HLQTATUN.js" async></script>
</body>
</html>
