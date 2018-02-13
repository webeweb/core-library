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

/**
 * Abstract database.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Database
 */
abstract class AbstractDatabase {

    /**
     * Database.
     *
     * @var string
     */
    private $database;

    /**
     * Password.
     *
     * @var string
     */
    private $password;

    /**
     * Username.
     *
     * @var string
     */
    private $username;

    /**
     * Constructor.
     */
    protected function __construct() {
        // NOTHING TO DO.
    }

    /**
     * Get the database.
     *
     * @return string Returns the database.
     */
    final public function getDatabase() {
        return $this->database;
    }

    /**
     * Get the paswword.
     *
     * @return string Returns the password.
     */
    final public function getPassword() {
        return $this->password;
    }

    /**
     * Get the username.
     *
     * @return string Returns the username.
     */
    final public function getUsername() {
        return $this->username;
    }

    /**
     * Set the database.
     *
     * @param string $database The database.
     * @return AbstractDatabase Returns the database.
     */
    final public function setDatabase($database) {
        $this->database = $database;
        return $this;
    }

    /**
     * Set the password.
     *
     * @param string $password The password.
     * @return AbstractDatabase Returns the database.
     */
    final public function setPassword($password) {
        $this->password = $password;
        return $this;
    }

    /**
     * Set the username.
     *
     * @param string $username The username.
     * @return AbstractDatabase Returns the database.
     */
    final public function setUsername($username) {
        $this->username = $username;
        return $this;
    }

}
