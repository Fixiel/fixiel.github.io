<?
$params = trim($_POST['parameters']);
$text = '';
preg_match_all('/[^\D]\d*/', $params, $matches);
$weight = $matches[0][0];
$length = $matches[0][1];
if (empty($params) || empty($weight) || empty($length)) {
    $text = 'Ошибка';
} else {
    session_start();
    if (!$_SESSION['defect_elephants']) {
        $_SESSION['defect_elephants'] = array();
    }
    if (!$_SESSION['count_elephants']) {
        $_SESSION['count_elephants'] = array(
            'good' => 0,
            'bad' => 0
        );
    }
    if ($weight <= 190 || $weight >= 210 || $length < 14 || $length > 16) {
        $_SESSION['count_elephants']['bad']++;
        array_push($_SESSION['defect_elephants'], array(
            'weight' => $weight,
            'length' => $length
        ));
        $text = 'Слон отправлен в брак';
    } else {
        $text = 'Слон допущен до продажи';
        $_SESSION['count_elephants']['good']++;
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Данные по слону</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/styles.css">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="/js/scripts.js"></script>
    </head>
    <body>
        <div class="wrapper validate-response">
            <h2><?= $text; ?></h2>
            <div class="controls">
                <a href="/index.php" class="next">Следующий слон</a>
                <button class="report">Отчет за день</button>
            </div>
            <div class="result-form"></div>
        </div>
    </body>
</html>