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
 * Droit sync port trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolDroitSyncPortTrait {

    /**
     * Droit sync port.
     *
     * @var bool
     */
    private $droitSyncPort;

    /**
     * Get the droit sync port.
     *
     * @return bool Returns the droit sync port.
     */
    public function getDroitSyncPort() {
        return $this->droitSyncPort;
    }

    /**
     * Set the droit sync port.
     *
     * @param bool $droitSyncPort The droit sync port.
     */
    public function setDroitSyncPort($droitSyncPort) {
        $this->droitSyncPort = $droitSyncPort;
        return $this;
    }
}
