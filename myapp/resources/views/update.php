<!doctype html>
<html>
<head>
    <title>Sample</title>
    <style>
        body {color:gray}
        h1 {font-size:18pt; font-weight: bold;}
        th {color:white; background: #999;}
        td {color:black; background: #eee; padding:5px 10px}
        .submit {font-size:16px;}
    </style>
</head>
<body>
    <h1>Sample</h1>
    <p><?php echo $message; ?></p>
    <table>
        <form method="post" action="/hello/update">
            <input type="hidden" name="id" value="<?php echo $data->id; ?>">
            <tr>
                <td>NAME:</td>
                <td><input type="text" name="name" value="<?php echo $data->name; ?>"></td>
            </tr>
            <tr>
                <td>MAIL:</td>
                <td><input type="text" name="mail" value="<?php echo $data->mail; ?>"></td>
            </tr>
            <tr>
                <td>AGE:</td>
                <td><input type="text" name="age" value="<?php echo $data->age; ?>"></td>
            </tr>
            <tr><td></td><td><input class="submit" type="submit" value="update data"></td></tr>
        </form>
    </table>
    <form method="get" action="/hello">
        <input class="submit" type="submit" value="cansel">
    </form>
</body>
</html>