Documentation
=============

> IMPORTANT NOTICE:
>
> FTP classes uses the PHP `ext-ftp` same as suggested during the composer
> installation.

Authentication

```php
use WBW\Library\Common\Security\Authenticator;
use WBW\Library\Common\Security\PasswordAuthentication;

// Create a password authentication.
$authentication = new PasswordAuthentication("user", "pass");

// Create an authenticator.
$authenticator = new Authenticator("hostname", $authentication);
```

FTP client

```php
use WBW\Library\Ftp\Client\FtpClient;

// Create the client.
$client = new FtpClient($authenticator);

// Open the connection.
$client->connect();
$client->login();

// ...

// Close the connection.
$client->close();
```

FTPS client

```php
use WBW\Library\Ftp\Client\FtpsClient;

// Create the client.
$client = new FtpsClient($authenticator);

// Open the connection.
$client->connect();
$client->login();

// ...

// Close the connection.
$client->close();
```

sFTP client

```php
use WBW\Library\Ftp\Client\SftpClient;

// Create the client.
$client = new SftpClient($authenticator);

// Open the connection.
$client->connect();
$client->login();

// ...

// Close the connection.
$client->close();
```
