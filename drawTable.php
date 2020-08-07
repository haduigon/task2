<?php

function drawTable(array $array): void{
    $html = '<table border="1">';
    $html .= '<thead>';
    $html .='<th>Email</th>';
    $html.='<th>Name</th>';
    $html.='<thead>';
    $html.='<tbody>';

    foreach($array as $row) {

        $html .= "<tr><td>{$row['email']}</td><td>{$row['name']}</td></tr>";
    }

    $html.='</tbody>';
    $html.='</html>';
    echo $html;

}
?>

