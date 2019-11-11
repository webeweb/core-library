<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Database;

use PDO;
use WBW\Library\Core\Argument\StringHelper;
use WBW\Library\Core\Security\Authenticator;

/**
 * Oracle MySQL database.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Database
 */
class OracleMySQLDatabase extends AbstractDatabase {

    /**
     * Microsoft SQL Server DSN.
     *
     * @var string
     */
    const DEFAULT_DSN = "mysql:host=%HOST%;port=%PORT%;dbname=%DATABASE%;";

    /**
     * Constructor.
     *
     * @param Authenticator $authenticator The authenticator.
     * @param string $database The database.
     */
    public function __construct(Authenticator $authenticator, $database) {
        parent::__construct($authenticator);
        $this->setDatabase($database);
        if (null === $this->getAuthenticator()->getPort()) {
            $this->getAuthenticator()->setPort(3306);
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function connect() {

        $searches   = ["%HOST%", "%PORT%", "%DATABASE%"];
        $replaces   = [$this->getAuthenticator()->getHostname(), $this->getAuthenticator()->getPort(), $this->getDatabase()];
        $attributes = [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"];

        $dsn = str_replace($searches, $replaces, self::DEFAULT_DSN);

        return new PDO($dsn, $this->getAuthenticator()->getPasswordAuthentication()->getUsername(), $this->getAuthenticator()->getPasswordAuthentication()->getPassword(), $attributes);
    }
}
