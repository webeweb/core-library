<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Security;

/**
 * Password authentication.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Security
 */
class PasswordAuthentication {

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
     *
     * @param string $username The username.
     * @param string $password The password.
     */
    public function __construct($username, $password) {
        $this->password = $password;
        $this->username = $username;
    }

    /**
     * Get the password.
     *
     * @return string Returns the password.
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * Get the username.
     *
     * @return string Returns the username.
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * Set the password.
     *
     * @param string $password The password.
     * @return PasswordAuthentication Returns the password authentication.
     */
    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }

    /**
     * Set the username.
     *
     * @param string $username The username.
     * @return PasswordAuthentication Returns the password authentication.
     */
    public function setUsername($username) {
        $this->username = $username;
        return $this;
    }

}
