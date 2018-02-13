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

use Exception;
use PDO;

/**
 * Abstract database.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Database
 */
abstract class AbstractDatabase {

    /**
     * Connection.
     *
     * @var PDO
     */
    private $connection;

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
     * Connect.
     *
     * @return PDO Returns the connection.
     * @throws Exception Throws an exception if the connection failed.
     */
    abstract protected function connect();

    /**
     * Get the connection.
     *
     * @return PDO Returns the connection.
     * @throws Exception Throws an exception if the connection failed.
     */
    final public function getConnection() {
        if (null === $this->connection) {
            $this->connection = $this->connect();
        }
        return $this->connection;
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
     * Prepare an INSERT SQL query.
     *
     * @param string $table The table.
     * @param array $fields The fields [field => value].
     * @return string Returns the INSERT SQL query.
     */
    final public function prepareInsert($table, array $fields) {

        // Initialize the SQL.
        $sql = [];

        $sql[] = "INSERT INTO ";
        $sql[] = $table;
        $sql[] = " (";
        $sql[] = implode(", ", array_keys($fields));
        $sql[] = ") VALUES (";
        $sql[] = implode(", ", array_values($fields));
        $sql[] = ")";

        // Return the SQL.
        return implode("", $sql);
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
