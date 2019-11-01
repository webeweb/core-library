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
 * Mnt ticket resto e trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMntTicketRestoETrait {

    /**
     * Mnt ticket resto e.
     *
     * @var float
     */
    private $mntTicketRestoE;

    /**
     * Get the mnt ticket resto e.
     *
     * @return float Returns the mnt ticket resto e.
     */
    public function getMntTicketRestoE() {
        return $this->mntTicketRestoE;
    }

    /**
     * Set the mnt ticket resto e.
     *
     * @param float $mntTicketRestoE The mnt ticket resto e.
     */
    public function setMntTicketRestoE($mntTicketRestoE) {
        $this->mntTicketRestoE = $mntTicketRestoE;
        return $this;
    }
}
