<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Database\Connector;

use Exception;
use PDO;
use WBW\Library\Core\Security\Authenticator;

/**
 * Abstract database connector.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Database\Connector
 */
abstract class AbstractDatabaseConnector {

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
     *
     * @param Authenticator $authenticator The authenticator.
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
    public function getAuthenticator() {
        return $this->authenticator;
    }

    /**
     * Get the connection.
     *
     * @return PDO Returns the connection.
     * @throws Exception Throws an exception if the connection failed.
     */
    public function getConnection() {
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
    public function getDatabase() {
        return $this->database;
    }

    /**
     * Prepare a binding.
     *
     * @param array $fields The fields.
     * @return array Returns the binding as key => :key.
     */
    public function prepareBinding(array $fields) {
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
    public function prepareInsert($table, array $values) {

        $query = [
            "INSERT INTO ",
            $table,
            " (`",
            implode("`, `", array_keys($values)),
            "`) VALUES (",
            implode(", ", array_values($values)),
            ")",
        ];

        return implode("", $query);
    }

    /**
     * Prepare an UPDATE SQL query.
     *
     * @param string $table The table.
     * @param array $values The values [field => value]
     * @return string Returns the UPDATE SQL query.
     */
    public function prepareUpdate($table, array $values) {

        $set = [];
        foreach ($values as $k => $v) {
            $set[] = "`" . $k . "` = " . $v;
        }

        $query = [
            "UPDATE ",
            $table,
            " SET ",
            implode(", ", $set),
        ];

        return implode("", $query);
    }

    /**
     * Set the authenticator.
     *
     * @param Authenticator $authenticator The authenticator.
     * @return AbstractDatabase Returns this abstract database.
     */
    protected function setAuthenticator(Authenticator $authenticator) {
        $this->authenticator = $authenticator;
        return $this;
    }

    /**
     * Set the database.
     *
     * @param string $database The database.
     * @return AbstractDatabase Returns this abstract database.
     */
    protected function setDatabase($database) {
        $this->database = $database;
        return $this;
    }
}
