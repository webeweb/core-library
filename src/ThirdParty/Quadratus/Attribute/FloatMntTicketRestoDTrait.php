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
 * Mnt ticket resto d trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMntTicketRestoDTrait {

    /**
     * Mnt ticket resto d.
     *
     * @var float
     */
    private $mntTicketRestoD;

    /**
     * Get the mnt ticket resto d.
     *
     * @return float Returns the mnt ticket resto d.
     */
    public function getMntTicketRestoD() {
        return $this->mntTicketRestoD;
    }

    /**
     * Set the mnt ticket resto d.
     *
     * @param float $mntTicketRestoD The mnt ticket resto d.
     */
    public function setMntTicketRestoD($mntTicketRestoD) {
        $this->mntTicketRestoD = $mntTicketRestoD;
        return $this;
    }
}
