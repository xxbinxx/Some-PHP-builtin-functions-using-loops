<html>
<?php
  function unique($s_arr)
  {
    $us_arr = array();   
    foreach($s_arr as $s)
    {
      $flag = true;
      foreach($us_arr as $us)
      {   
        if ($us==$s)
        {
          $flag = false;
          break;
        }      
      }
      
      if($flag)
      {
        $us_arr[] = $s;
      }
    }
    return $us_arr;
  }
?>

<body>
<?php
  $str = [1, 2, 5, 7, 9, 2, 5];
  $uStr = unique($str);
  foreach ($uStr as $u) {
     echo $u.'<br>';  
  }
?>
</body>
</html>