<?php
$myfile = fopen("000-default.conf", "w") or die("Unable to open file!");
$txt = '<VirtualHost *:80>


       
        DocumentRoot /var/www/html

    	<Directory /var/www/>
		Options Indexes FollowSymLinks MultiViews
		AllowOverride All
		# AllowOverride None
		Order allow,deny
		allow from all
	   </Directory>
	   <Directory /var/www/html>
		Options Indexes FollowSymLinks MultiViews
		AllowOverride All
		# AllowOverride None
		Order allow,deny
		allow from all
	   </Directory>

        ErrorLog ${APACHE_LOG_DIR}/error.log
        CustomLog ${APACHE_LOG_DIR}/access.log combined

</VirtualHost>';
fwrite($myfile, $txt);
echo "Sikere baszod";
?>

