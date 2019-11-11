<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Security;

use WBW\Library\Core\Model\Attribute\IntegerPortTrait;
use WBW\Library\Core\Model\Attribute\StringHostnameTrait;

/**
 * Authenticator.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Security
 */
class Authenticator {

    use IntegerPortTrait;
    use StringHostnameTrait;

    /**
     * Password authentication.
     *
     * @var PasswordAuthentication
     */
    private $passwordAuthentication;

    /**
     * Scheme.
     *
     * @var string
     */
    private $scheme;

    /**
     * Constructor.
     *
     * @param string $hostname The hostname.
     * @param PasswordAuthentication $passwordAuthentication
     */
    public function __construct($hostname, PasswordAuthentication $passwordAuthentication) {
        $this->setHostname($hostname);
        $this->setPasswordAuthentication($passwordAuthentication);
    }

    /**
     * Get the password authentication.
     *
     * @return PasswordAuthentication Returns the password authentication.
     */
    public function getPasswordAuthentication() {
        return $this->passwordAuthentication;
    }

    /**
     * Get the scheme.
     *
     * @return string Returns the scheme.
     */
    public function getScheme() {
        return $this->scheme;
    }

    /**
     * Set the password authenticator.
     *
     * @param PasswordAuthentication $passwordAuthentication The password authentication.
     * @return Authenticator Returns this authenticator.
     */
    public function setPasswordAuthentication(PasswordAuthentication $passwordAuthentication) {
        $this->passwordAuthentication = $passwordAuthentication;
        return $this;
    }

    /**
     * Set the scheme.
     *
     * @param string $scheme The scheme.
     * @return Authenticator Returns this authenticator.
     */
    public function setScheme($scheme) {
        $this->scheme = $scheme;
        return $this;
    }
}
