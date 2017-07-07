# iitg-appuser-class
This is an extended PHP Class implementation of the iitg-appuser-class, implements the iitg-captcha-class and ACL feature.

Dependencies:
The PHP IMAP mail related extension, PHP GD libraries are required to be pre-installed on the web server (php-imap/php5-imap, php-gd). Additionally, this class uses a TTF font file to generate the CAPTCHA characters. In our use-case example, we use the "xeroxmalfunction.ttf", downloaded from http://www.webpagepublicity.com/free-fonts-x.html#Free%20Fonts

This extended class also implements ACL feature using MySQL backend database. You need to specify the database credentials along with the ACL Table and Field.

Note:
"https" should be used for implementing the login/secure URLs when-ever you send out sensitive information across the network (like the username and password)

Check-out the "example-usage" folder, which contains a sample use-case of this class using bootstrap.min.css<br />
example-usage/<br />
├── classes<br />
│   ├── iitg-captcha-class.php #IITG CAPTCHA Class<br />
│   └── iitg-appuser-class.php #IITG AppUser Class<br />
├── config.php #Global config file<br />
├── captcha-image.php #CAPTCHA generating file<br />
├── css<br />
│   └── bootstrap.min.css #bootstrap css file<br />
├── fonts<br />
│   └── xeroxmalfunction.ttf #TTF font file<br />
├── footer.php #page-footer<br />
├── header.php #page-header<br />
├── login.php #page-login<br />
├── logout.php #page-logout<br />
├── memberpage.php #page-secure<br />
└── menu.php #page-menu<br />
