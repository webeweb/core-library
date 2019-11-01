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
 * Heures trav4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHeuresTrav4Trait {

    /**
     * Heures trav4.
     *
     * @var float
     */
    private $heuresTrav4;

    /**
     * Get the heures trav4.
     *
     * @return float Returns the heures trav4.
     */
    public function getHeuresTrav4() {
        return $this->heuresTrav4;
    }

    /**
     * Set the heures trav4.
     *
     * @param float $heuresTrav4 The heures trav4.
     */
    public function setHeuresTrav4($heuresTrav4) {
        $this->heuresTrav4 = $heuresTrav4;
        return $this;
    }
}
