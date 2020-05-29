<?php
#Turn on output buffering
ob_start();
#Get the ipconfig details using system command
#system('ipconfig /all');

#Capture the output into a variable
$mycom=ob_get_contents();
#Clean (erase) the output buffer
ob_clean();

$findme = "Physical";
#Search the "Physical" | Find the position of Physical text
$pmac = strpos($mycom, $findme);

# Get Physical Address
$comp=substr($mycom,($pmac+36),17);
#Display Mac Address
#echo '<h1 style="color: #ff0000;">'.$comp.'</h1>';
?>
<?php
#--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
#$comp = gethostbyaddr($_SERVER['REMOTE_ADDR']);
#--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
session_start();
  if ((!$_SESSION['username']) && ($_SESSION['computerName'] != '$comp')) {
    #$_SESSION['flash_error'] = "Please sign in";
    header("Location: index.php");
    exit; // IMPORTANT: Be sure to exit here!
  }
#--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
?>