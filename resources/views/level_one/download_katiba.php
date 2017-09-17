<?php
  if($type == 1){
      $path = "assets/images/katiba.pdf";
  }else if($type == 2){
      $path = "assets/images/katiba2.pdf";
  }else if($type == 3){
      $path = "assets/images/katiba3.pdf";
  }

  if (file_exists($path)) {
      header('Content-Description: File Transfer');
      header('Content-Type: application/pdf');
      header('Content-Disposition: attachment; filename="'.basename($path).'"');
      header('Expires: 0');
      header('Cache-Control: must-revalidate');
      header('Pragma: public');
      header('Content-Length: ' . filesize($path));
      readfile($path);
      exit;
  }
?>
