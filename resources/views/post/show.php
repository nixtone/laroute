<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
show view page 1 --- <?=$post?>

<div>field <?
    if(isset($_SESSION['message'])) {
        echo $_SESSION['message'];
    }
    ?></div>

</body>
</html>