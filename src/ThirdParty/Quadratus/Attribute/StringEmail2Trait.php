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
 * Email2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEmail2Trait {

    /**
     * Email2.
     *
     * @var string
     */
    private $email2;

    /**
     * Get the email2.
     *
     * @return string Returns the email2.
     */
    public function getEmail2() {
        return $this->email2;
    }

    /**
     * Set the email2.
     *
     * @param string $email2 The email2.
     */
    public function setEmail2($email2) {
        $this->email2 = $email2;
        return $this;
    }
}
