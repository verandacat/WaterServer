<?php
  $redirect[99] = "https://track.affiliate-b.com/visit.php?guid=ON&a=q1398F-630765j&p=1506217y"; //crystal

  if( isset($_GET['id']) ){
    $id = intval($_GET['id']);
    header("Location:$redirect[$id]");
  }
?>
