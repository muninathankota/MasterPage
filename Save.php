<?php
$data = [
  $_POST['name'],
  $_POST['email'],
  $_POST['phone'],
  $_POST['state'],
  $_POST['city'],
  $_POST['course']
  $_POST['Department']
];

$file = fopen("admissions.csv", "a");
fputcsv($file, $data);
fclose($file);

echo "Success";
?>