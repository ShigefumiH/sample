<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>helloWorld</title>
    <style>
        body {color:gray}
        h1 {font-size: 18px; font-weight: bold;}
        th {color:white; background:#999;}
        td {color:black; background:#eee; padding:5px 10px;}
        .submit {font-size:16px;}
    </style>
</head>
<body>
    <h1>SampleMyApp</h1>
    <p><?php echo $message; ?></p>
    <table>
        <tr>
            <th>ID</th><th>NAME</th><th>MAIL</th><th>AGE</th><th></th><th></th>
        </tr>
            <?php foreach ($data as $val) { ?>
                <tr>
                    <td><?php echo $val->id; ?></td>
                    <td><?php echo $val->name; ?></td>
                    <td><?php echo $val->mail; ?></td>
                    <td><?php echo $val->age; ?></td>
                    <td>
                        <form method="get" action="/hello/update">
                            <input type="hidden" name="id" value="<?php echo $val->id; ?>">
                            <input class="submit" type="submit" value="change data">
                        </form>
                    </td>
                    <td>
                        <form method="post" action="/hello/delete">
                            <input type="hidden" name="id" value="<?php echo $val->id ?>">
                            <input class="submit" type="submit" value="delete this data">
                        </form>
                    </td>
                </tr>
            <?php } ?>
    </table>
    <form method="post" action="/hello">
        <input type="text" name="str">
        <input class="submit" type="submit" value="search names by prefix">
    </form>
    <form method="get" action="/hello/new">
        <input class="submit" type="submit" value="create new data">
    </form>
</body>
</html>