<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Проверка слонов</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/styles.css">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="/js/scripts.js"></script>
    </head>
    <body>
        <div class="wrapper">
            <form class="elephant-check-form" action="/actions/validate-elephants.php" method="post">
                <input type="text" name="parameters" value="" class="parameters" placeholder="Введите вес и длину">
                <input type="submit" name="send-btn" value="Проверить" class="validate-form">
            </form>
            <div class="result-form"></div>  
        </div>
    </body>
</html>