<?php 
$ini = parse_ini_file('config.ini'); 

function ping($host, $port, $timeout) { 
  $tB = microtime(true); 
  $fP = @fSockOpen($host, $port, $errno, $errstr, $timeout); 
  if (!$fP) { return '<div class="danger" role="alert">Down</div>'; } 
  $tA = microtime(true); 
  return '<div class="success" role="alert">Operational ('.round((($tA - $tB) * 1000), 0).' ms)</div>'; 
}



//Echoing it will display the ping if the host is up, if not it'll say "down".
echo "<h2>".$ini['status_1_name']."</h2>";
echo ping($ini['status_1_ip'], 80, 1);
echo "<h2>".$ini['status_2_name']."</h2>";
echo ping($ini['status_2_ip'], 80, 1);
echo "<h2>".$ini['status_3_name']."</h2>";
echo ping($ini['status_3_ip'], 80, 1);
echo "<h2>".$ini['status_4_name']."</h2>";
echo ping($ini['status_4_ip'], 80, 1);
echo "<h2>".$ini['status_5_name']."</h2>";
echo ping($ini['status_5_ip'], 80, 1);
echo "<h2>".$ini['status_6_name']."</h2>";
echo ping($ini['status_6_ip'], 80, 1);
echo "<h2>".$ini['status_7_name']."</h2>";
echo ping($ini['status_7_ip'], 80, 1);
echo "<h2>".$ini['status_8_name']."</h2>";
echo ping($ini['status_8_ip'], 80, 1);
echo "<h2>".$ini['status_9_name']."</h2>";
echo ping($ini['status_9_ip'], 80, 1);
echo "<h2>".$ini['status_10_name']."</h2>";
echo ping($ini['status_10_ip'], 80, 1);
echo "<br>"

?>