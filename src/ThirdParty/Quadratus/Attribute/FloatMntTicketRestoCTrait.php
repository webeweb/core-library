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
 * Mnt ticket resto c trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMntTicketRestoCTrait {

    /**
     * Mnt ticket resto c.
     *
     * @var float
     */
    private $mntTicketRestoC;

    /**
     * Get the mnt ticket resto c.
     *
     * @return float Returns the mnt ticket resto c.
     */
    public function getMntTicketRestoC() {
        return $this->mntTicketRestoC;
    }

    /**
     * Set the mnt ticket resto c.
     *
     * @param float $mntTicketRestoC The mnt ticket resto c.
     */
    public function setMntTicketRestoC($mntTicketRestoC) {
        $this->mntTicketRestoC = $mntTicketRestoC;
        return $this;
    }
}
