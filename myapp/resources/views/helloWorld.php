<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>helloWorld</title>
    <style>
        body {color:gray}
        h1 {font-size: 18px; font-weight: bold;}
    </style>
</head>
<body>
    <h1>Sample</h1>
    <p><?php echo $message; ?></p>
    <table>
        <tr>
            <th>ID</th><th>NAME</th><th>MAIL</th><th>AGE</th>
        </tr>
            <?php foreach ($data as $val) { ?>
                <tr>
                    <td><?php echo $val->id; ?></td>
                    <td><?php echo $val->name; ?></td>
                    <td><?php echo $val->mail; ?></td>
                    <td><?php echo $val->age; ?></td>
                </tr>
            <?php } ?>
    </table>
    <form method="post" action="/hello">
        <input type="text" name="str">
        <input type="submit">
    </form>
</body>
</html>