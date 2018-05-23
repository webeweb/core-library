<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Database;

use DateTime;
use Exception;
use PDO;
use WBW\Library\Core\Exception\IO\FileNotFoundException;
use WBW\Library\Core\Security\Authenticator;

/**
 * Abstract database.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Database
 */
abstract class AbstractDatabase {

    /**
     * Authenticator.
     *
     * @var Authenticator
     */
    private $authenticator;

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
     * Constructor.
     */
    protected function __construct(Authenticator $authenticator) {
        $this->authenticator = $authenticator;
    }

    /**
     * Connect.
     *
     * @return PDO Returns the connection.
     * @throws Exception Throws an exception if the connection failed.
     */
    abstract protected function connect();

    /**
     * Get the authenticator.
     *
     * @return Authenticator Returns the authenticator.
     */
    final public function getAuthenticator() {
        return $this->authenticator;
    }

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
     * Set the authenticator.
     *
     * @param Authenticator $authenticator The authenticator.
     * @return AbstractDatabase Returns this abstract database.
     */
    final public function setAuthenticator(Authenticator $authenticator) {
        $this->authenticator = $authenticator;
        return $this;
    }

    /**
     * Set the database.
     *
     * @param string $database The database.
     * @return AbstractDatabase Returns this abstract database.
     */
    final public function setDatabase($database) {
        $this->database = $database;
        return $this;
    }

}
