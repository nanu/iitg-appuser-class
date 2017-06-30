# iitg-appuser-class
This is a PHP Class implementation for enabling user authentication using POP Mailservers

Dependencies:
The PHP IMAP mail related extension is required to be pre-installed on the web server (php-imap/php5-imap).

Note:
"https" should be used for implementing the login/secure URLs when-ever you send out sensitive information across the network (like the username and password)

Check-out the "example-usage" folder, which contains a sample use-case of this class using bootstrap.min.css<br />
example-usage/<br />
├── classes<br />
│   └── iitg-appuser-class.php #IITG AppUser Class<br />
├── config.php #Global config file<br />
├── css<br />
│   └── bootstrap.min.css #bootstrap css file<br />
├── footer.php #page-footer<br />
├── header.php #page-header<br />
├── login.php #page-login<br />
├── logout.php #page-logout<br />
├── memberpage.php #page-secure<br />
└── menu.php #page-menu<br />
