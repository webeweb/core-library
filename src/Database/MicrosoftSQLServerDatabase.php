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
 * Microsoft SQL Server database.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Database
 */
class MicrosoftSQLServerDatabase extends AbstractDatabase {

    /**
     * Microsoft SQL Server DSN.
     *
     * @var string
     */
    const DEFAULT_DSN = "sqlsrv:server=%HOST%,%PORT%;database=%DATABASE%;";

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
            $this->getAuthenticator()->setPort(1433);
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function connect() {

        $searches = ["%HOST%", "%PORT%", "%DATABASE%"];
        $replaces = [$this->getAuthenticator()->getHostname(), $this->getAuthenticator()->getPort(), $this->getDatabase()];

        $dsn = str_replace($searches, $replaces, self::DEFAULT_DSN);

        return new PDO($dsn, $this->getAuthenticator()->getPasswordAuthentication()->getUsername(), $this->getAuthenticator()->getPasswordAuthentication()->getPassword());
    }
}
