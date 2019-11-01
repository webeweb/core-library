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
 * Mnt ticket resto b trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMntTicketRestoBTrait {

    /**
     * Mnt ticket resto b.
     *
     * @var float
     */
    private $mntTicketRestoB;

    /**
     * Get the mnt ticket resto b.
     *
     * @return float Returns the mnt ticket resto b.
     */
    public function getMntTicketRestoB() {
        return $this->mntTicketRestoB;
    }

    /**
     * Set the mnt ticket resto b.
     *
     * @param float $mntTicketRestoB The mnt ticket resto b.
     */
    public function setMntTicketRestoB($mntTicketRestoB) {
        $this->mntTicketRestoB = $mntTicketRestoB;
        return $this;
    }
}
