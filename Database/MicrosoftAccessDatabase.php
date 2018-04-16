<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Database;

use PDO;
use WBW\Library\Core\Database\AbstractDatabase;
use WBW\Library\Core\Exception\IO\FileNotFoundException;
use WBW\Library\Core\Utility\StringUtility;

/**
 * Microsoft Access database.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Database
 * @final
 */
final class MicrosoftAccessDatabase extends AbstractDatabase {

    /**
     * Microsoft Access DSN.
     */
    const DEFAULT_DSN = "odbc:DRIVER={Microsoft Access Driver (*.mdb)}; DBQ=%DBQ%; UID=%UID%; PWD=%PWD%";

    /**
     * Constructor.
     *
     * @param string $filename The filename.
     * @param string $username The username.
     * @param string $password The password.
     */
    public function __construct($filename = null, $username = "", $password = "") {
        parent::__construct();
        $this->setDatabase($filename);
        $this->setUsername($username);
        $this->setPassword($password);
    }

    /**
     * {@inheritdoc}
     */
    protected function connect() {

        // Check if the filename exists.
        if (false === file_exists($this->getDatabase())) {
            throw new FileNotFoundException($this->getDatabase());
        }

        // Replace the parameters.
        $dsn = StringUtility::replace(self::DEFAULT_DSN, ["%DBQ%", "%UID%", "%PWD%"], [$this->getDatabase(), $this->getUsername(), $this->getPassword()]);

        // Return the connection.
        return new PDO($dsn);
    }

}
