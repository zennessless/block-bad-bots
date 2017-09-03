# Block IP Addresses & Bad Bots
Script &amp; settings to block website bad bots and site copiers.

# Installation
// .htaccess version:
Copy content of the .htaccess file (or the file itself) into your root folder .htaccess file.

// .php version (recommended):
Copy ```inc``` folder or it's content and include ```blocked.php``` in your ```header.php``` or every file of your static php page by ```include __DIR__'/inc/security/blocked.php';```

[x] Add the IP addresses you want to block in "bad.ip.addresses.php".
[x] Add the bad Bots names you want to block into "bad.bots.list.php".
