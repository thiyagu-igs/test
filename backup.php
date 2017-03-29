<?php 
 $host_connection = 'tls://smtp.office365.com'; // domain name
 $ports_number = array(25, 80,465, 443, 587); //checking port number

foreach ($ports_number as $port)
{
$connection_check = fsockopen($host_connection, $port);

if (is_resource($connection_check))
{
echo '<h5>' . $host_connection . ':' . $port . ' ' . '(' . getservbyport($port, 'tcp')     . ') is open now.</h5>' . "\n";

fclose($connection_check);
}

else
{
 echo '<h5>' . $host_connection . ':' . $port . ' is not open now.</h5>' . "\n";
   }
 }
 ?>