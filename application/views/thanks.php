<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thank you</title>
</head>
<body>
<h1>Successed!</h1>
<ul>
    <?php foreach($_POST as $items => $index) :?>
        <li><?php echo $index; ?></li>
    <?php endforeach;?>
</ul>

</body>
</html>