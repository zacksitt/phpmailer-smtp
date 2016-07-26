# phpmailer-smtp
sending mail with php

# Change this thing in sender gmail setting	
 A: At security tab sign-in section is there, find 2-step verification and disable it.
 B: In Account permissions section, find  Access for less secure apps and enable it.

# Please change this line in you ini.php file		
 Find the line.
 ;extension=php_openssl.dll
 Remove  ";" from this line to enable
 extension=php_openssl.dll
 Save and restart all services
 ssl service  is enable
