<!DOCTYPE html>
<html>
<head>
    <title>sample</title>
    <style>
        body {color:gray;}
        h1 {font-size: 18pt; font-weight: bold;}
        th {color:white; background: #999;}
        td {color:black; background: #eee; padding:5px 10px;}
        .submit {font-size:16px;}
    </style>
</head>
<body>
    <h1>sample</h1>
    <p><?php echo $message; ?></p>
    <table>
        <form method="post" action="/hello/new">
            <tr><td>NAME:</td><td><input type="text" name="name"></td></tr>
            <tr><td>MAIL:</td><td><input type="text" name="mail"></td></tr>
            <tr><td>AGE:</td><td><input type="text" name="age"></td></tr>
            <tr><td></td><td><input class="submit" type="submit" value="submit"></td></tr>
        </form>
    </table>
    <form method="get" action="/hello">
        <input class="submit" type="submit" value="cansel" action="/hello">
    </form>
</body>
</html>