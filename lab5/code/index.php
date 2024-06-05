<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no,m initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <title>OZON</title>
</head>
<body>
<div id="form">
    <form action="save.php" method="post">

        <label for="email">Email</label>
        <input type="email" name="email" required>

        <label for="category">Category</label>
        <select name="category" required>

            <?php
            $categories = ['electronics', 'other', 'food', 'drink'];
            foreach ($categories as $category) {?>
                <option value=<?php echo $category;?>><?php echo $category;?></option>
            <?php }?>

        </select>


        <label for="title">Title</label>
        <input type="text" name="title" required>

        <label for="title">Description</label>
        <textarea rows="3" name="description"></textarea>

        <input type="submit" value="Save">
    </form>
</div>
<div id="table">
    <table>
        <thead>
        <th>Category</th>
        <th>Email</th>
        <th>Title</th>
        <th>Description</th>
        </thead>
        <tbody>

        <?php
        $mysqli = new mysqli('db', 'root', 'helloworld', 'web');
        if (mysqli_connect_errno()) {
            printf('Подключение к серверу MySQL невозможно. Код ошибки: $s\n', mysql_connect_error());
            exit;
        }
        $adds = $mysqli->query('SELECT email, title, description, category FROM ad');
        while ($row = $adds->fetch_assoc()) {?>
            <tr>
                <?php
                foreach(['electronics', 'other', 'food', 'drink'] as $item) {?>
                    <td><?php echo $row[$item];?></td>
                    <?php
                }?>
            </tr>
            <?php
        }
        $adds->close();
        $mysqli->close();
        ?>
        </tbody>
    </table>
</div>
</body>
</html>
