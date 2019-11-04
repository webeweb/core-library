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

use WBW\Library\Core\Model\Attribute\StringPasswordTrait;
use WBW\Library\Core\Model\Attribute\StringUsernameTrait;

/**
 * Password authentication.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Security
 */
class PasswordAuthentication {

    use StringPasswordTrait;
    use StringUsernameTrait;

    /**
     * Constructor.
     *
     * @param string $username The username.
     * @param string $password The password.
     */
    public function __construct($username, $password) {
        $this->setPassword($password);
        $this->setUsername($username);
    }
}
