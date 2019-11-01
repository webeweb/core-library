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
 * Email nb j ag mini trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntEmailNbJAgMiniTrait {

    /**
     * Email nb j ag mini.
     *
     * @var int
     */
    private $emailNbJAgMini;

    /**
     * Get the email nb j ag mini.
     *
     * @return int Returns the email nb j ag mini.
     */
    public function getEmailNbJAgMini() {
        return $this->emailNbJAgMini;
    }

    /**
     * Set the email nb j ag mini.
     *
     * @param int $emailNbJAgMini The email nb j ag mini.
     */
    public function setEmailNbJAgMini($emailNbJAgMini) {
        $this->emailNbJAgMini = $emailNbJAgMini;
        return $this;
    }
}
