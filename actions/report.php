<?php
session_start();
$elephants = $_SESSION;
array_multisort($elephants["defect_elephants"]);
$html = <<<EOD
<div class="elephants-statistics">
    <div class="count-good-elephants">Количество допущенных до продажи слонов: {$elephants["count_elephants"]["good"]}</div>
    <div class="count-bad-elephants">Количество допущенных до продажи слонов: {$elephants["count_elephants"]["bad"]}</div>
    <table class="all-bad-elephants">
        <tr>
            <th>Вес, длина</th>
        </tr>
EOD;
        foreach ($elephants["defect_elephants"] as $key => $value) {
$html .= <<<EOD
            <tr>
            <td>{$value["weight"]}, {$value["length"]}</td>
            </tr>
EOD;
        }
$html .= <<<EOD
    </table>
</div>
EOD;
echo $html;