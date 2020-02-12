<?php

  $email = $_POST['email'];
  $currentCustomer = $_POST['currentCustomer'];
  $compaction = $_POST['compaction'];
  $density = $_POST['density'];
  $storage = $_POST['storage'];
  $gps = $_POST['gps'];
  $accuracy = $_POST['accuracy'];
  $verticalAccuracy = $_POST['verticalAccuracy'];
  $survey = $_POST['survey'];
  $surveyBrand = $_POST['surveyBrand'];
  $siteManagement = $_POST['siteManagement'];
  $siteBrand = $_POST['siteBrand'];
  $bluetoothCapable = $_POST['bluetoothCapable'];
  $reviewData = $_POST['reviewData'];

  //Main semicolon seperated data
  $data = [
  "\n",
  " ${email};",
  " ${currentCustomer};",
  " ${compaction};",
  " ${density};",
  " ${storage};",
  " ${gps};",
  " ${accuracy};",
  " ${verticalAccuracy};",
  " ${survey};",
  " ${surveyBrand};",
  " ${siteManagement};",
  " ${siteBrand};",
  " ${bluetoothCapable};",
  " ${reviewData}"
  ];

  //Backup Data in the event main datas order gets jumbled
  $data2 = [ 
  "\n",
  "Email Address: ${email}",
  "Current Customer: ${currentCustomer}",
  "Performs Compaction: ${compaction}",
  "Performs Density Testing: ${density}",
  "Utilizes onboard storage: ${storage}",
  "GPS tagged location is useful: ${gps}",
  "Level of accuracy required: ${accuracy}",
  "Level of vertical accuracy required: ${verticalAccuracy}",
  "Uses Survey Grade Systems: ${survey}",
  "Uses Survey Grade Systems Brand: ${surveyBrand}",
  "Uses Site Management Systems: ${siteManagement}",
  "Uses Site Management Systems Brand: ${siteBrand}",
  "Would like bluetooth control: ${bluetoothCapable}",
  "Would like to review data remotely: ${reviewData}"
  ];

  //Save Main Data
  file_put_contents('myfile.txt', $data, FILE_APPEND);

  //Save Backup Data
  file_put_contents('myfile2.txt', implode(PHP_EOL, $data2), FILE_APPEND);
  
  //Redirect to Success page
  header("Location: success.php");

?>