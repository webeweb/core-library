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
 * Provision totale trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatProvisionTotaleTrait {

    /**
     * Provision totale.
     *
     * @var float
     */
    private $provisionTotale;

    /**
     * Get the provision totale.
     *
     * @return float Returns the provision totale.
     */
    public function getProvisionTotale() {
        return $this->provisionTotale;
    }

    /**
     * Set the provision totale.
     *
     * @param float $provisionTotale The provision totale.
     */
    public function setProvisionTotale($provisionTotale) {
        $this->provisionTotale = $provisionTotale;
        return $this;
    }
}
