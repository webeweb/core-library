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
 * @author webeweb <https://github.com/webeweb/>
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
     * Prepare a binding.
     *
     * @param array $fields The fields.
     * @return array Returns the binding as key => :key.
     */
    final public function prepareBinding(array $fields) {
        $output = [];
        foreach ($fields as $current) {
            $output[$current] = ":" . $current;
        }
        return $output;
    }

    /**
     * Prepare an INSERT SQL query.
     *
     * @param string $table The table.
     * @param array $values The values [field => value].
     * @return string Returns the INSERT SQL query.
     */
    final public function prepareInsert($table, array $values) {

        // Initialize the query.
        $query = [];

        $query[] = "INSERT INTO ";
        $query[] = $table;
        $query[] = " (`";
        $query[] = implode("`, `", array_keys($values));
        $query[] = "`) VALUES (";
        $query[] = implode(", ", array_values($values));
        $query[] = ")";

        // Return the query.
        return implode("", $query);
    }

    /**
     * Prepare an UPDATE SQL query.
     *
     * @param string $table The table.
     * @param array $values The values [field => value]
     * @return string Returns the UPDATE SQL query.
     */
    final public function prepareUpdate($table, array $values) {

        // Initialize the SET.
        $set = [];
        foreach ($values as $k => $v) {
            $set[] = "`" . $k . "` = " . $v;
        }

        // Initialize the query.
        $query = [];

        $query[] = "UPDATE ";
        $query[] = $table;
        $query[] = " SET ";
        $query[] = implode(", ", $set);

        // Return the query.
        return implode("", $query);
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
