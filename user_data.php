<?Php

  $name = $_POST['name'];
  $date = $_POST['date'];
  $gender = $_POST['gender'];
  $country = $_POST['country'];

  $data = [$name,$date,$gender,$country];


  $file = fopen('userdata.csv','a');
  fputcsv($file,$data);
  fclose($file);

  print_r($data);

?>