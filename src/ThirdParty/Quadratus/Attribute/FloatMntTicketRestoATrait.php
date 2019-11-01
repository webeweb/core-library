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
 * Mnt ticket resto a trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMntTicketRestoATrait {

    /**
     * Mnt ticket resto a.
     *
     * @var float
     */
    private $mntTicketRestoA;

    /**
     * Get the mnt ticket resto a.
     *
     * @return float Returns the mnt ticket resto a.
     */
    public function getMntTicketRestoA() {
        return $this->mntTicketRestoA;
    }

    /**
     * Set the mnt ticket resto a.
     *
     * @param float $mntTicketRestoA The mnt ticket resto a.
     */
    public function setMntTicketRestoA($mntTicketRestoA) {
        $this->mntTicketRestoA = $mntTicketRestoA;
        return $this;
    }
}
