<?php
require 'drawTable.php';
$data=[
['email'=>$_POST['email'],
'name'=>$_POST['name']
]
];
echo "Created new db table";
drawTable($data);

?>
