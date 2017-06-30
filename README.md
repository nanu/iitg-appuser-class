# iitg-appuser-class
This is a PHP Class implementation for enabling user authentication using IITG Mailservers

Dependencies:
The PHP IMAP mail related extension is required to be pre-installed on the web server (php-imap/php5-imap).

Note:
"https" should be used for implementing the login/secure URLs when-ever you send out sensitive information accross the network (like the username and password)

Check-out the "example-usage" folder, which contains a sample use-case of this class using bootstrap.min.css
example-usage/
├── classes
│   └── iitg-appuser-class.php               #IITG AppUser Class
├── config.php                               #Global config file
├── css
│   └── bootstrap.min.css                    #bootstrap css file
├── footer.php                               #page-footer
├── header.php                               #page-header
├── login.php                                #page-login
├── logout.php                               #page-logout
├── memberpage.php                           #page-secure
└── menu.php                                 #page-menu
