<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Attribute;

/**
 * User trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringUserTrait {

    /**
     * User.
     *
     * @var string
     */
    private $user;

    /**
     * Get the user.
     *
     * @return string Returns the user.
     */
    public function getUser() {
        return $this->user;
    }

    /**
     * Set the user.
     *
     * @param string $user The user.
     */
    public function setUser($user) {
        $this->user = $user;
        return $this;
    }
}
