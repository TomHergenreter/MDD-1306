MDD-1306
========

Full Sail University - Mobile Device Deployment - Tom Hergenreter

Download application to local server, and set local host document root to application/app/webroot. Navigate to (yourLocalHost) in your web browser to create a new account, and log in. 

Before logging in, database must be configured using most recent MDD SQL dump. Configuration with instructions can be found in app/config/database.php. You will need to set the username, password, and MYSQL port to the settings you are using on your system.

Default Database: MDD    
Default Database login: root      
Default Database password: password      
Default Database host: localhost (To add a socket or port number, use 'port' => #)       

Note: The Behance API only allows 150 requests per hour per API key. If you recieve a 429 error, this is the cause.



